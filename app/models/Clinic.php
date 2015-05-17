<?php

class Clinic extends \Eloquent {
	protected $fillable = ['name', 'address', 'is_activated'];

    public function employees(){
        return $this->hasMany('employees');
    }
}