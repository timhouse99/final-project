update final_events

set eventName = :eventName, 

location = :location, 
date = :date, 
userID = :userID

Where eventID = :eventID;