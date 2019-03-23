module.exports = function(grunt) {
    const sass = require('node-sass');
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            options: {
                implementation: sass,
                includePaths: ['bower_components/bootstrap-sass']
            },
            dist: {
                options: {
                    //outputStyle: 'compressed'
                    outputStyle: 'nested',
                    sourceMap: true
                },
                files: {
                    'css/app.css': 'scss/app.scss'

                }
            }
        },

        concat: {
            options: {
            },
            scripts: {
                src: [
                    'bower_components/jquery/dist/jquery.js',
                    'bower_components/bootstrap-sass/dist/js/bootstrap.min.js',
                    //'bower_components/flexslider/jquery.flexslider-min.js',
                    'js/app.js',
                    'js/animations.js'
                ],
                dest: 'js/main.js',
                nonull: true
            },
            styles: {
                src: [
                    'css/app.css'
                ],
                dest: 'css/style.css'
            }

        },



        watch: {
            grunt: { files: ['Gruntfile.js'] },

            sass: {
                // files: ['scss/*.scss', 'scss/magnumreal/*.scss'],

                files: ['scss/*.scss', 'scss/**/*.scss'],
                tasks: ['sass', 'concat']
            },

            php : {

                files: ['.php', 'widgets/.php']
            },

            html : {
                files: ['*.html']
            },

            js : {
                files: ['js/*.js', '!js/main.js'],
                tasks: ['concat']
            },

            options: {
                livereload:  true
            }
        },

        livereload  : {
            options   : {
                base    : '',
            },
            files     : ['*/']
        },

        autoprefixer: {
            options: {
                // Task-specific options go here.
            },

            // prefix the specified file
            single_file: {
                options: {
                    // Target-specific options go here.
                },
                src: 'css/style.css',
                dest: 'css/style.css'
            }
        },

        cssmin: {
            combine: {
                files: {
                    'css/style.min.css': ['css/style.css']
                }
            }
        },
        browserSync: {
            dev: {
                bsFiles: {
                    src : 'css/**.css',
                    src : 'js/**.js',
                    src : 'scss/**.scss',
                    src : '*.php'
                },
                options: {
                    watchTask: true,
                    proxy: "reevai.local"
                }
            }
        }

    });

    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-browser-sync');

    grunt.registerTask('build', ['sass', 'concat', 'cssmin']);
    grunt.registerTask('pack', ['build', 'autoprefixer', 'cssmin']);
    grunt.registerTask('default', ['watch', 'browserSync']);
    grunt.registerTask('sync', ['browserSync', 'watch']);
};