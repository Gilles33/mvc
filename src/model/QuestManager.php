<?php

class QuestManager extends PdoQuest
{

    public function createPdo() {
        $datas = new PdoQuest();
    }

    public function hydrateQuest() {
        //$bd = $this->createPdo();
        $result = $this->getAllData();
        $quest = array();
        foreach ($result as $key) {
            $quest[] = new Quest($key);
        }
        return $quest;
    }

}