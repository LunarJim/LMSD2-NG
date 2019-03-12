// See http://brunch.io for documentation.
exports.files = {
  javascripts: {
    joinTo: {
      'js/app.js': /^app/,
      'js/vendor.js': /^node_modules/,
    }
  },
  stylesheets: {
    joinTo: {
      'css/app.css': /^app/,
      'css/vendor.css': /^node_modules/,
    }
  }
};

exports.plugins = {
  browserSync: {
    files: ['*']
  },
  copycat: {
    'fonts': ['node_modules/font-awesome/fonts']
  }
};

exports.watcher = {
  usePolling: true,
  awaitWriteFinish: true
};

exports.npm = {
  styles: {
    'font-awesome': ['css/font-awesome.css'],
    'normalize.css': ['normalize.css']
  },
  globals: {
    '$': 'jquery',
    'jQuery': 'jquery',
    'scrollex': 'jquery.scrollex'
  }
};

exports.modules = {
  autoRequire: {
    'js/app.js': ['initialize']
  }
};