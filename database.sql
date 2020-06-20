create database song character set utf8;
use song;
drop database song;


create table song(
	songid int primary key auto_increment,
	songname varchar(60),
    banner varchar(100),
    userid int
);

create table account(
	userid int primary key auto_increment,
    username varchar(60),
    password varchar(60)
);

-- Default account to login
insert into account(username, password) values('anhduy', 'anhduy');
 
create table playlist(
	playlistid  int primary key auto_increment,
    playlistname varchar(30)
);

insert into playlist(playlistname) values("My favorite");
insert into playlist(playlistname) values("Anime"); 


-- Add to favorite(If you don't need it then comment this out)
create table songinplaylist(
	playlistid varchar(8),
    songid varchar(8)
);

insert into songinplaylist values(1, 2);
insert into songinplaylist values(1, 3);
insert into songinplaylist values(1, 4);
insert into songinplaylist values(1, 5);

  
  
-- Complete query to get detail information from a song
select * from songinplaylist 
inner join song on songinplaylist.songid = song.songid
inner join playlist on songinplaylist.songid = playlist.songid;

 
 
-- Procedure for pagination

delimiter $$
CREATE PROCEDURE getSongsWithLimit(start int, perpage int)
BEGIN
	SELECT * FROM song 
    limit start, perpage;
END$$;

CALL getSongsWithLimit(4, 2);

-- If you don't need favorite then comment this out
delimiter $$
CREATE PROCEDURE getSongsFromPlayListWithLimit(start int, perpage int, playlistId int)
BEGIN
	SELECT * FROM songinplaylist 
    inner join song where songinplaylist.songid = song.songid
    having songinplaylist.playlistid = playlistId
    limit start, perpage;
END$$;

CALL getSongsFromPlayListWithLimit(0,2,1);