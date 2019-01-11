<?php

echo "\nYour Atom Application is serving on localhost:2019\n";
echo "Open http://localhost:2019 in your web browser to access your application\n\n";

if (!file_exists('config/env.json')) {
    copy('config/env.example.json', 'config/env.json');
}

exec("php -S localhost:2019 -t public");
