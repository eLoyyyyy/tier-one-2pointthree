module.exports = function(grunt){

    grunt.initConfig({
        concat: {
            css: {
                src: ['css/*.css', '!css/*.min.css', '!css/style.css'],
                dest: 'css/style.css',
            },
            js: {
                src: ['js/*.js', '!js/*.min.js', '!js/scripts.js'],
                dest: 'js/scripts.js',
            },
			critical: {
				src: ['css/*.css', '!css/*.min.css', '!css/style.css'],
                dest: 'css/style.css',
			}
        },
        watch: {
            js: {
                files: ['js/*.js', '!js/*.min.js', '!js/scripts.js'],
                tasks: ['concat:js', 'uglify'],
            },
            css: {
                files: ['css/*.css', '!css/*.min.css', '!css/style.css', '!css/critical.php'],
                tasks: ['concat:css', 'cssmin', 'penthouse'],
            },
      			scripts: {
      				files: 'css/critical.php',
      				tasks: ['cssmin'],
      			}
        },
		uglify: {
			js: {
			  files: {
				'js/scripts.min.js': ['js/scripts.js']
			  }
			}
		},
		cssmin: {
			target: {
				files: {
				'css/style.min.css': ['css/style.css'],
				'css/critical.min.php': ['css/critical.php'],
			  }
			}
		},
		penthouse: {
			extract : {
				outfile : 'css/critical.php',
				css : 'css/style.css',
				url : 'http://www.jennifer.com/wordpress/',
				width : '1920',
				height : '1080'
			},
		}
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify'); /* js */
	grunt.loadNpmTasks('grunt-contrib-cssmin'); /* css */
	grunt.loadNpmTasks('grunt-penthouse');
    grunt.registerTask('default', ['concat', 'watch', 'uglify', 'cssmin']);

};
