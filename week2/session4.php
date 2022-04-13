<?php 
# DB Relation .....

/*
1:1 
1:m  == (m:1)
m:m 


==============================================================

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



# admin 
id name    email      password
1   admin   admin@a    123 

# patient 
id name  email  password
1   p     p@p    145

# doctors 
id name  email  password    specialize     gender   
1  doc    c@d     7777        x             male 

#########################################################################################

# UserTypes 
id     title 
1      admin 
2      doctor 
3      patient 

# Users 
id    name     email      password    type_id      
1     x         x@x        123          2             
2     y         y@y        888          3     
3     a         a@a        777          1   
4     d         d@d        999          2    


# doctor details 
id    specialize     gender        user_id(doc_id)
1        sp_x         male           1
2        sp_y         female         4 


users     UType 
1          1 
m          1
============= 
m      :   1 



users(doctor)        DocDetails
1                       1
1                       1
========================== 
1                       1
 


#########################################################################################

# Appointments 
id   day      from        to   
1    sun       12:00 pm   12:30pm       
2    sun       12:30 pm   1:00pm





doctor        appo 
1              m 
m              1
===================== 
m              m 



# Doctor Appointments 
id       doc_id       app_id        
1         1             2     



patient         doc_appo 
1                  m 
m                  1
======================== 
m      :            m 


#  Patient Reservation ..... 
id      pat_id    doc_app_id      date       status 
1        1           1            13/4        flase 
 */








// orders 
// id   price   date     user_id 
// 1    200.50   13/4     2 

// orderDetails 
// id   product_id   q 
// 1     2           3
// 2     4           2

?>