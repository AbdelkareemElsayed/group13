<?php 
# DB Relation .....

/*
1:1 
1:m  == (m:1)
m:m 

=============================================================== 

students [name,email,password,phone]
Managers  [name,email]
departments [title]
subjects    [title,code]



# Students Table ... 
id  name  email   password  phone        dep_id 
1    x    x@x      123      010xxx         1    
2    y    y@y      456      011xxx         1  


# departments 
id    title  
1      CS
2      IT 


# Managers 
id   name   email      dep_id 
1    Man     m@m         1
2    m2      m2@m        2 



# Subjects 
id title   code  
1   pl1     #12cs
2   pl2     #22cs 


# Student Subjects 
id     std_id     sub_id    grade 
1       1          1        90
2       1          2        70
3       2          1        100 


############################################################################################# 

students         departmnets 
1                 1
m                 1
===================== 
m        :        1


############################################################################################## 

students      subjects  
1              m 
m              1
=================== 
m     :        m

############################################################################################# 

managers        departmnets
 1                1 
 1                1
=====================
 1     :          1 







# Task .... 
Hospital management system that have 3 main types of users 1-admins 2-doctors 3-Patients.
With the following data.
Admins   (name, email, password ) ,    
Patients (name, email, password)  ,
Doctors  (name, email, password   , specialize(text) , gender).....


Doctors have appointments(day , from , to) and
Patients can reserve these appointments.
Note : doctor can accept or refuse reservations.
Requirments : create a database structure.


 */


?>