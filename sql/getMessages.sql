Select a.messageID, b.firstName, b.lastName , a.message, a.messageTime
From final_messages as a Join final_users as b on b.userID = a.userID;