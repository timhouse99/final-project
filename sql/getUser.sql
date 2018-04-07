select userID, firstName, lastName
from final_users
where userID = :userID and userPassword = :userPassword; 