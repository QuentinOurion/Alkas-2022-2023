#1
select *
from message
where user_id * = 8
order by date_creation desc
    limit 5;


#2
select nom, prenom, date_naissance
from user
order by date_naissance asc;


#3
select *
from user
order by date_inscription desc
    limit 5;


#4
select contenu,login,r.nom
from message m
         join roles r
         join user u
              on r.id = u.roles_id
              on m.user_id = u.id
    limit 20
;


#5
select m.*,r.nom, u.*
from message m
         join roles r
         join user u
              on r.id = u.roles_id
              on m.user_id = u.id
;



#7
select concat(m.contenu, m.date_creation, u.prenom, u.nom) as result
from message m
         join user u
              on m.user_id = u.id
where conversation_id = 9;


#8
select conversation_id
from message
where user_id = '10'
  and date_creation between '2010-12-31' and '2022-01-01';

#9


#10
select user_id, conversation_id, count(distinct u.id)
from user u
         join message m
              on u.id = m.user_id
group by m.conversation_id


    #12
select *
from conversation c
         join user u
              on c.id = u.id
where c.termine = 1;


#13
select *
from user
where roles_id = 1
  and date_inscription like '2020%'
