<?php

class Quest
{
    public $_id;
    public $_name;
    public $_course;
    public $_score;


    public function __construct($object)
    {
        $this->setId($object->id);
        $this->setName($object->name);
        $this->setCourse($object->course);
        $this->setScore($object->score);
    }

    /*getters*/
    public function getId()
    {
        return $this->_id;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getCourse()
    {
        return $this->_course;
    }

    public function getScore()
    {
        return $this->_score;
    }

    /*setters*/
    public function setId($id)
    {
        $this->_id = $id;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function setCourse($course)
    {
        $this->_course = $course;
    }

    public function setScore($score)
    {
        $this->_score = $score;
    }



}