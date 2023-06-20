<?php
  require "db.php";

  /**
   * formatPhone
   * Formats a 10 digit phone number
   * @param string $phone
   * @return string
   */
  function formatPhone ($phone) {
    if (strlen($phone) !== 10) {
      return $phone;
    }
    
    $area_code = substr($phone, 0, 3);
    $prefix = substr($phone, 3, 3);
    $line_number = substr($phone, 6, 4);
    return "({$area_code}) {$prefix}-{$line_number}";
  }

  /**
   * sanitize
   * Sanitizes data from a form submission
   * @param array $data
   * @return array
   */
  function sanitize ($data) {
    foreach ($data as $key => $value) {
      if ($key === 'phone') {
        $value = preg_replace('/[^0-9]/', '', $value);
      } 

      $data[$key] = htmlspecialchars(stripslashes(trim($value)));
    }

    return $data;
  }

  /**
   * getContacts
   * Retrieves all contacts from the database
   * @return array
   */
  function getContacts () {
    // replace the following with a call to the database
    $contacts = [
      [
        "id" => 1,
        "first_name" => "John",
        "last_name" => "Smith",
        "email" => "john.smith@email.com",
        "phone" => "5555555555",
        "birthday" => "1990-01-01"
      ],
    ];

    return $contacts;
  }

  /**
   * searchContacts
   * Retrieves contacts from the database that match the search term
   * @param string $search
   * @return array
   */
  function searchContacts ($search) {
    // replace the following with a call to the database
    $contacts = [
      [
        "id" => 1,
        "first_name" => "John",
        "last_name" => "Smith",
        "email" => "john.smith@email.com",
        "phone" => "5555555555",
        "birthday" => "1990-01-01"
      ],
    ];

    return $contacts;
  }

  /**
   * getContact
   * Retrieves a single contact from the database
   * @param int $id
   * @return array
   */
  function getContact ($id) {
    // replace the following with a call to the database
    $contact = [
        "id" => 1,
        "first_name" => "John",
        "last_name" => "Smith",
        "email" => "john.smith@email.com",
        "phone" => "5555555555",
        "birthday" => "1990-01-01"
    ];

    return $contact;
  }

  /**
   * validate
   * Validates the data from the form
   * @param array $data
   * @return array $errors
   */
  function validate ($data) {
    $fields = ['first_name', 'last_name', 'email', 'phone', 'birthday'];
    $errors = [];

    foreach ($fields as $field) {
      
      switch ($field) {
        case 'first_name':
          
          // update the conditions to match the requirements
          if (false) { // first_name cannot be empty
            $errors[$field] = 'First name is required';
          } elseif (false) { // first_name must be less than 50 characters and only contain letters
            $errors[$field] = 'First name must be less than 50 characters and only contain letters';
          }
          
          break;
        case 'last_name':

            // update the conditions to match the requirements
            if (false) { // last_name cannot be empty
              $errors[$field] = 'Last name is required';
            } else if (false) { // last_name must be less than 100 characters and only contain letters
              $errors[$field] = 'First name must be less than 100 characters and only contain letters';
            } 

            break;
        case 'email':

          // update the conditions to match the requirements
          if (false) { // email cannot be empty
            $errors[$field] = 'Email is required';
          } else if (false) { // email must be properly formatted
            $errors[$field] = 'Email is invalid';
          }

          break;
        case 'phone':
          
          // update the conditions to match the requirements
          if (false) { // if phone is not empty, it must contain 10 digits
            $errors[$field] = 'Phone number is invalid';
          }
          
          break;
        case 'birthday':

          // update the conditions to match the requirements
          if (false) { // if birthday is not empty, it must be a valid date
            $errors[$field] = 'Birthday is invalid';
          }
          break;
      }
    }

    return $errors;
  }

  /**
   * createContact
   * Creates a new contact in the database
   * @param array $data
   * @return int
   */
  function createContact ($data) {
    // replace the following with a call to the database returning the new contact id

    return 1; 
  }

  /**
   * updateContact
   * Updates a contact in the database
   * @param array $data
   * @return bool
   */
  function updateContact ($data) {
    // replace the following with a call to the database

    return true;
  }

  /**
   * deleteContact
   * Deletes a contact from the database
   * @param int $id
   * @return bool
   */
  function deleteContact ($id) {
    // replace the following with a call to the database

    return true;
  }