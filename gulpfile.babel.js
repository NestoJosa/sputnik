import { src, dest, watch } from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
import postcss from 'gulp-postcss';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'autoprefixer';
import imagemin from 'gulp-imagemin';

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

export const watchForChanges = () => {
  watch('src/scss/**/*.scss', compileStyles);
  watch('src/images/**/*.{jpg,jpeg,png,svg,gif}', compressImages);
}

export default watchForChanges;