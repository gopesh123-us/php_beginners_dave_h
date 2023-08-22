<?php

namespace App {
    class Item
    {
        protected function show()
        {
            echo 'showing';
        }
    }
}

namespace App\Models {
    class user
    {
        private $username;
        private $useremail;

        public function __construct(string $username, string $email)
        {
            $this->username = $username;
            $this->useremail = $email;
        }
    }
}

namespace App\Models {
    class product
    {
        private $productname;
    }
}


namespace myspace {
    class DateTime
    {
        protected function getDate()
        {
            echo 'Today Date';
        }
    }
}
