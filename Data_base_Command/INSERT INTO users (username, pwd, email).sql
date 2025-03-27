INSERT INTO users (username, pwd, email) VALUES ('Femsam', 'femsam01', 'femsam02@gmail.com');

INSERT INTO comments (username, comment_text, users_id) VALUES ('Femsam', 'This is a comment on a website', '3');
SELECT username, email FROM users WHERE id = 3;
SELECT username, comment_text FROM comments WHERE user_id = 3;
SELECT * FROM comments WHERE user_id = 3;
SELECT * FROM users INNER JOIN comments ON users.id = comments.user_id;
SELECT * FROM users LEFT JOIN comments ON users.id = comments.user_id;