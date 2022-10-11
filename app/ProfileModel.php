<?php
require "autoload.php";
class ProfileModel extends ObservableModel
{

	public function getAll(): array
    {
		return [];
    }

    public function getRecord(string $id): array
    {
		$data = $this->loadData(DATA_DIR . '/user_courses.json');
		$trial = $data['users_courses'];
		
		foreach($trial as $key => $value)
		{
			if($value["email"] == $id)
			{				
				$user = array();
				$user[0] = $value["email"];
	
				return ['user'=>$user];
			}
		}
		
        return [];
	}
}

?>