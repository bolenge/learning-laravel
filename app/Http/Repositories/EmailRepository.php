<?php
    namespace App\Http\Repositories;

    use App\Models\Email;

    class EmailRepository implements EmailRepositoryInterface {

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