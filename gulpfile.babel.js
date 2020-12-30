import { src, dest } from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
import postcss from 'gulp-postcss';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'autoprefixer';

const PRODUCTION = yargs.argv.prod;

export const styles = () => {
  return src('src/scss/bundle.scss')
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))

    // compile from sass til css
    .pipe(sass().on('error', sass.logError))
    // add vendor profixes
    .pipe(gulpif(PRODUCTION, postcss([ autoprefixer ])))
    // minify the file
    .pipe(gulpif(PRODUCTION, cleanCss({compatibility:'ie8'})))
    
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    .pipe(dest('dist/css'));
}

export default styles;