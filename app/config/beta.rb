set :application, "4success-beta"
set :domain,      "4success.smart-gamma.com"
set :user,        "4success"
set :deploy_to,   "/home/4success/4success"

set :branch,      "develop"

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain, :primary => true       # This may be the same as your `Web` server
role :db,         domain, :primary => true