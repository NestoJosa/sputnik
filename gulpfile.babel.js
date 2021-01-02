import { src, dest, watch, series, parallel } from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
import postcss from 'gulp-postcss';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'autoprefixer';
import imagemin from 'gulp-imagemin';
import del from 'del';
import webpack from 'webpack-stream';

const PRODUCTION = yargs.argv.prod;

export const compileStyles = () => {
  return src('src/scss/bundle.scss')
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))

    // compile from sass til css
    .pipe(sass().on('error', sass.logError))
    // add vendor profixes
    .pipe(gulpif(PRODUCTION, postcss([ autoprefixer ])))
    // minify the file
    .pipe(gulpif(PRODUCTION, cleanCss({compatibility:'ie8'})))
    // add source maps
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))

    .pipe(dest('dist/css'));
}

export const compressImages = () => {
  return src('src/images/**/*.{jpg,jpeg,png,svg,gif}')
    .pipe(gulpif(PRODUCTION, imagemin()))
    .pipe(dest('dist/images'));
}

export const copy = () =>{
  return src(['src/**/*', '!src/{images,js,scss}', '!src/{images,js,scss}/**/*'])
  .pipe(dest('dist'));
}

export const clean = () => del(['dist']);

export const scripts = () => {
  return src('src/js/bundle.js')
  .pipe(webpack({
    module: {
      rules: [
        {
          test: /\.js$/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: []
            }
          }
        }
      ]
    },
    mode: PRODUCTION ? 'production' : 'development',
    devtool: !PRODUCTION ? 'inline-source-map' : false,
    output: {
      // we need to specify a file name, otherwise webpack will generate
      // a bundle with a hash as the filename
      filename: 'bundle.js'
    },
  }))
  .pipe(dest('dist/js'));
}

export const watchForChanges = () => {
  watch('src/scss/**/*.scss', compileStyles);
  watch('src/images/**/*.{jpg,jpeg,png,svg,gif}', compressImages);
  watch(['src/**/*','!src/{images,js,scss}','!src/{images,js,scss}/**/*'], copy);
  watch('src/js/**/*.js', scripts);
}

export const dev = series(clean, parallel(compileStyles, compressImages, copy, scripts), watchForChanges);
export const build = series(clean, parallel(compileStyles, compressImages, copy, scripts));
export default dev;
