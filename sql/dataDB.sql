insert into CalendarEvent values
	(null, 'Start of Calendar', 'LCPD', '2018-02-27', '16:21:00', '1780 E University Ave, Las Cruces, NM 88003', 'This is just the beginning...', null, null, null);
    
select * from CalendarEvent;

insert into Notification values
	(null, 'Start of Notifications', 'You have received the first notification!', '2018-02-27 16:25:00');
    
select * from Notification;

insert into User values
	(null, 'admin1', 'reallygoodpassword', 'Admin McAdminDude', 'Admin'),
    (null, 'user1', 'goodpassword', 'User Guy', 'Standard'),
    (null, 'user2', 'password', 'User Guy II', 'Pending');
    
select * from User;