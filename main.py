import mysql.connector
mydb = mysql.connector.connect(
  host="localhost",
  user="CorbeauRather",
  password="Alexis",
  database="corbeaurather",
)
mail = []
mycursor = mydb.cursor()
mycursor.execute("SELECT * FROM `formulaire`")
for x in mycursor:
  mail.append(x[2])

print(mail)
#Using the set() Function
unique_list = list(set(mail))
print("tableau unique : ",unique_list)
for mail in unique_list:
    print(mail.upper())



user = []
mycursor = mydb.cursor()
mycursor.execute("SELECT * FROM `formulaire`")
for x in mycursor:
  user.append(x[1])

print(user)
Using the set() Function
unique_list = list(set(user))
print("tableau unique : ",unique_list)
for user in unique_list:
    print(user.upper())


comments = []
mycursor = mydb.cursor()
mycursor.execute("SELECT * FROM `formulaire`")
for x in mycursor:
  comments.append(x[4])

Using the set() Function
unique_list = list(set(comments))
for comments in unique_list:
    longueur = len(comments.upper())
    if longueur > 10:
        print(longueur)
        print(comments.upper())
    else:
        print("- de 10")
        print(comments.upper())