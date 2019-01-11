<?php

echo "\nYour Atom Application is serving on localhost:2019\n";
echo "Open http://localhost:2019 in your web browser to access your application\n\n";

return exec("php -S localhost:2019 -t public");