import MySQLdb
db = MySQLdb.connect(host="mysql.orbescarlos.com.ar", user="utn", passwd="utn12345", db="utn1")       

cur = db.cursor()
cur.execute("SELECT * FROM PUESTOS")

for row in cur.fetchall():
    print row[0]
    print row[1]