# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "css"
sass_dir = "scss"
images_dir = "images"
javascripts_dir = "js"
relative_assets = true

# You can select your preferred output style here (can be overridden via the command line):
output_style = (environment == :development) ? :expanded : :compressed

# debugging comments that display the original location of your selectors.
line_comments = (environment == :development) ? true : false

if environment == :development
    sass_options = {:sourcemap => true}
end