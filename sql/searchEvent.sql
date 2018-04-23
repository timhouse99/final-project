Select eventID, eventName, location, date, userID
From final_events
where eventName Like :search;