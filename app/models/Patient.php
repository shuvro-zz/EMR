<?php

class Patient extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
        'name' => 'required',
        'gender' => 'required',
        'age' => 'required',
        'city' => 'required',
        'country' => 'required',
        'address' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['name', 'dob', 'gender', 'age', 'email', 'city', 'country', 'address',
    'phone', 'cnic', 'note'];

//  Relationships
    public function allergies()
    {
        return $this->hasMany('Allergy');
    }

    public function drugusages()
    {
        return $this->hasMany('Drugusage');
    }

    public function familyhistories()
    {
        return $this->hasMany('Familyhistory');
    }

    public function previousdiseases()
    {
        return $this->hasMany('Previousdisease');
    }

    public function surgicalhistories()
    {
        return $this->hasMany('Surgicalhistory');
    }

    public function diagonosticprocedures()
    {
        return $this->hasMany('Diagonosticprocedure');
    }

    public function vitalsigns()
    {
        return $this->hasMany('Vitalsign');
    }

    public function labtests()
    {
        return $this->hasMany('Labtest');
    }

    public function appointments()
    {
        return $this->hasMany('Appointment');
    }

    public function prescriptions()
    {
        return $this->hasMany('Prescription');
    }

    public function checkupfees()
    {
        return $this->hasMany('Checkupfee');
    }
}