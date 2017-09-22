Dockerizing Symfony Applications
================================

A Symfony project created on September 18, 2017, 1:29 pm.


Step 1 :
-------

$ sudo cp /etc/mysql/mysql.conf.d/mysqld.cnf docker/mysql/.


Step 2 : Bind to all available IP addresses instead

$ vi docker/mysql/mysqld.cnf

And Change 

bind-address		= 127.0.0.1 

By

bind-address		= 0.0.0.0 


Step 3: Stop all services that  using port 80 and 3306 in your localhost. In my case Apache and Mysql

$ sudo service apache2 stop 
$ sudo service mysql stop


Step 4 : Stops containers and removes containers 

$ docker-compose down  --remove-orphans


Step 5 :   start up your application by running

$ docker-compose up --build


Step 6 : In your browser (In my case don't work localhost so I uused the IP)

To see site : http://127.0.0.1:80

To see phpMyadmin : http://127.0.0.1:8080


If you want to use Mysql by console
===================================

Step 1 : Execute

$ docker-compose exec database bash

Step 2: 

Now, you are into file system  (ex:  root@a73e1b74109f:/# )

root@a73e1b74109f:/#  mysql -u root -p
Enter password: 

mysql> select * from your_table;


