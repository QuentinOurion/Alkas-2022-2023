#1
select *
from message
where user_id = 8
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
select message.contenu, user.login, roles.nom
from message
         join user on user.id = message.user_id
         join roles on roles.id = user.roles_id
order by message.date_creation desc
limit 20;

#5
select *
from message m
         join user u on u.id = m.user_id
         join roles r on r.id = u.roles_id

where r.nom = 'admin'
  and year(now()) - year(u.date_naissance) > 18
order by m.date_creation desc
limit 5;

#6
select m.contenu, u.login, m.conversation_id
from message m
         join user u on u.id = m.user_id
where year(now()) - year(u.date_naissance) between 18 and 30
order by m.date_creation desc
limit 10;

#7
select concat(m.contenu, ' - ', m.date_creation, ' - ', u.prenom, ' ', u.nom) result
from message m
         join user u on m.user_id = u.id
where
        conversation_id = 9;

# 8
select distinct conversation_id
from message m
where
        m.user_id = 10
  and
    date(m.date_creation) between  '2020-1-31' and '2021-10-11'

# 9
select id, login
from user
order by login asc;

SELECT DISTINCT m.user_id, u.login
FROM `message` m
         JOIN `user` u ON m.user_id =u.id
WHERE m.conversation_id IN (
    SELECT DISTINCT `conversation_id`
    FROM `message`
    WHERE `user_id` = 50
)
ORDER BY u.`login` ASC;

# 10
select m.user_id, m.conversation_id, count(distinct m.id) nbr
from message m
group by m.user_id, m.conversation_id;

# 11
SELECT *
FROM `message` m
         JOIN `conversation` c ON m.conversation_id = c.id
WHERE m.date_creation < c.date_creation
ORDER BY m.conversation_id ASC, m.date_creation ASC;

# 12
SELECT u.id
FROM `user` u
WHERE u.id NOT IN (
    SELECT m.user_id
    FROM `message` m
             INNER JOIN `conversation` c ON m.conversation_id = c.id
    WHERE  c.termine = 0
);

# 13
SELECT *
FROM `message` m
         INNER JOIN `user` u ON m.user_id = u.id
         INNER JOIN `roles` r ON u.roles_id = r.id
         INNER JOIN `conversation` c ON m.conversation_id = c.id
WHERE r.nom = "admin"
  AND YEAR(u.date_inscription) = "2020"
  AND c.termine = 0;

# 14
SELECT *
FROM `message` m
         INNER JOIN `user` u ON m.user_id = u.id
         INNER JOIN `roles` r ON u.roles_id = r.id
WHERE r.nom = "alcoolique"
  AND (YEAR(NOW()) - YEAR(u.date_naissance)) < 18
  AND `contenu` LIKE "%de%"
LIMIT 5;

# 15
SELECT *
FROM `message` m
WHERE m.`date_creation` > (
    SELECT MAX(`date_creation`)
    FROM `message` m
    WHERE m.`user_id` = 69
)
ORDER BY m.`conversation_id` ASC, m.`date_creation` DESC;