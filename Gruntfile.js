module.exports = function(grunt){
	grunt.initConfig({
		pkg:grunt.file.readJSON('package.json'),
		sass:{
			dist:{
				options:{
					style:'compressed'
				},
				files:{
					'public/media/css/style.css':'public/media/sass/style.sass'
				}
			}
		},
		watch: {
			css: {
				files: ['public/media/sass/*.sass', 'public/media/sass/*/*.sass'],
				tasks: ['sass']
			},
			tasks:{
				files:['app/controllers/*.php', 'app/models/*.php'],
				tasks:['phpunit']
			}
		},
		phpunit:{
			classes:{
				dir:'tests/'
			},
			options:{
				colors:true
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-phpunit');
	grunt.registerTask('default', ['sass']);
};

