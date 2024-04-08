<?php
function addProperty($housestyle,$price, $address, $brokername, $bathrooms, $bedrooms, $squarefeet, $state, $county, $status)
{
    global $db;
    $query = "INSERT INTO Property (name, price) VALUES (:housestyle,:price)";  
    try { 
        // $statement = $db->query($query);   // compile & exe
  
        // prepared statement
        // pre-compile
        $statement = $db->prepare($query);
  
        // fill in the value
        $statement->bindValue(':housestyle', $housestyle);
        $statement->bindValue(':price', $price);
  
        // exe
        $statement->execute();
        $statement->closeCursor();
     } catch (PDOException $e)
     {
        $e->getMessage();   // consider a generic message
        echo "$e";
     } catch (Exception $e) 
     {
        $e->getMessage();   // consider a generic message
        echo "$e";
     }
}
function addRequests($reqDate, $roomNumber, $reqBy, $repairDesc, $reqPriority)
{
   global $db;   
   $reqDate = date('Y-m-d');      // ensure proper data type before inserting it into a db
   
   // $query = "INSERT INTO requests (reqDate, roomNumber, reqBy, repairDesc, reqPriority) VALUES ('2024-03-18', 'CCC', 'Someone', 'fix light', 'medium')";
   // $query = "INSERT INTO requests (reqDate, roomNumber, reqBy, repairDesc, reqPriority) VALUES ('" . $reqDate . "', '" . $roomNumber . "', '" . $reqBy . "', '" . $repairDesc . "', '" . $reqPriority . "')";  
    
   $query = "INSERT INTO requests (reqDate, roomNumber, reqBy, repairDesc, reqPriority) VALUES (:reqDate, :roomNumber, :reqBy, :repairDesc, :reqPriority)";  
   
   try { 
      // $statement = $db->query($query);   // compile & exe

      // prepared statement
      // pre-compile
      $statement = $db->prepare($query);

      // fill in the value
      $statement->bindValue(':reqDate', $reqDate);
      $statement->bindValue(':roomNumber', $roomNumber);
      $statement->bindValue(':reqBy',$reqBy);
      $statement->bindValue(':repairDesc', $repairDesc);
      $statement->bindValue(':reqPriority', $reqPriority);

      // exe
      $statement->execute();
      $statement->closeCursor();
   } catch (PDOException $e)
   {
      $e->getMessage();   // consider a generic message
   } catch (Exception $e) 
   {
      $e->getMessage();   // consider a generic message
   }

}

function getAllRequests()
{
   global $db;
   $query = "select * from requests";    
   $statement = $db->prepare($query);    // compile
   $statement->execute();
   $result = $statement->fetchAll();     // fetch()
   $statement->closeCursor();

   return $result;
}

function getRequestById($id)  
{
   global $db;
   $query = "select * from requests where reqId=:reqId"; 
   $statement = $db->prepare($query);    // compile
   $statement->bindValue(':reqId', $id);
   $statement->execute();
   $result = $statement->fetch();
   $statement->closeCursor();

   return $result;
}

function updateRequest($reqId, $reqDate, $roomNumber, $reqBy, $repairDesc, $reqPriority)
{
   global $db;
   $query = "update requests set reqDate=:reqDate, roomNumber=:roomNumber, 
   reqBy=:reqBy, repairDesc=:repairDesc, reqPriority=:reqPriority where reqId=:reqId" ; 

   $statement = $db->prepare($query);
   $statement->bindValue(':reqId', $reqId);
   $statement->bindValue(':reqDate', $reqDate);
   $statement->bindValue(':roomNumber', $roomNumber);
   $statement->bindValue(':reqBy',$reqBy);
   $statement->bindValue(':repairDesc', $repairDesc);
   $statement->bindValue(':reqPriority', $reqPriority);

   $statement->execute();
   $statement->closeCursor();



}

function deleteRequest($reqId)
{

    
}

?>