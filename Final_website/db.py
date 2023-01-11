from pymongo import MongoClient



client =MongoClient("mongodb+srv://ADS:123@cluster0.ovb90gs.mongodb.net/?retryWrites=true&w=majority")
db=client["reception_data"]
mycol = db["user_data"]

a=list(mycol.find({"ph_number":209}))
# print(a)
for doc in a:
    print(doc)