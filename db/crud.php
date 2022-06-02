<?php

    class crud {
        private $db;

        function __construct($conn) 
        {
            $this->db = $conn;
        }

        public function insertAttendee($fname, $lname, $dob, $selected, $email, $contact){
            try {
                $sql = "INSERT INTO form_db.attendee (firstname, lastname, dob, selected, email, phone) VALUES (:fname,:lname,:dob,:selected,:email,:contact)";
    
                //$selected = 1;

                $stmt = $this->db->prepare($sql);
                

                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':selected',$selected);

                $stmt->execute();
                return true;
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }        

        public function editAttendee(){
            
        }

        public function getAttendee(){
            try{
                $sql = "SELECT * FROM form_db.attendee a inner join form_db.selected s on a.selected = s.selected_id";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }

        public function getAttendeeDetails($id){
            $sql = "SELECT * FROM form_db.attendee a inner join form_db.selected s on a.selected = s.selected_id 
            where attende_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }

        public function getSelected(){
            try{
                $sql = "SELECT * FROM form_db.selected";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }  
    }

?>