<?php
    namespace App\Repositories;

    use App\Models\Email;

    class EmailRepository {

        protected $email;

        public function __construct(Email $email)
        {
            $this->email = $email;
        }

        public function save($email)
        {
            $this->email->email = $email;
            $this->email->save();
        }
    }