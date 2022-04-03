<?php
namespace App\Models\Traits;

trait Userable
{
    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);

        if (in_array($key, $this->userable)) {
            $value = $this->user ? $this->user->$key : '';
        }

        if (in_array($key, $this->encryptable)) {
            try {
                $value = decrypt($value);
            } catch (\Throwable $th) {
                $value = $value;
            }
        }

        return $value;
    }

    public function setAttribute($key, $value)
    {
        if (in_array($key, $this->userable)) {
            $this->user->$key = $value;
            $this->user->save();
            $value = $this->user->$key;
        }else{
            if (in_array($key, $this->encryptable)) {
                $value = encrypt($value);
            }
            return parent::setAttribute($key, $value);
        }

    }
}