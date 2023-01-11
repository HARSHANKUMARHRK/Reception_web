from __future__ import print_function
from googleapiclient.discovery import build
from google.oauth2 import service_account

SERVICE_ACCOUNT_FILE = 'key.json'

SCOPES = ['https://www.googleapis.com/auth/spreadsheets']

credentials = None
credentials = service_account.Credentials.from_service_account_file(
        SERVICE_ACCOUNT_FILE, scopes=SCOPES)

# If modifying these scopes, delete the file token.json.


# The ID and range of a sample spreadsheet.
SAMPLE_SPREADSHEET_ID = '1XksmEkGLbsrMluREMBXlRJOzCY6A7zjF7DEtr3Va21s'
attendance = '11K95050fKySzSxMe15wS8-vubaGgTTjUbASyiUtW_FI'

service = build('sheets', 'v4', credentials=credentials)
sheet = service.spreadsheets()


def create():
        
        result = sheet.values().get(spreadsheetId=attendance,
                                range="Sheet1!O1").execute()
        values = result.get('values', [])

        index_val = int(values[0][0])
        index_val += 1

        return index_val


def sheet_function(data_list,index_val):

        

        # Call the Sheets API


        request = sheet.values().update(spreadsheetId=attendance, 
                                range="Sheet1!O1", valueInputOption="USER_ENTERED", body={"values" : [[index_val]]}).execute()


        # check = [["hello"], ["hii"], ["how "]]

        request = sheet.values().update(spreadsheetId=attendance, 
                                range=f"Sheet1!A{index_val}", valueInputOption="USER_ENTERED", body={"values" : data_list}).execute()


        return 

def email_list():
        result = sheet.values().get(spreadsheetId=attendance,
                                range="Sheet1!A16:Q500").execute()
        values = result.get('values', [])
        ids = []
        print(values)

        for each in values:
                ids.append(each[15])
        return ids

a=[[1,2,3]]
# print(create())
sheet_function(a,create())