import pyttsx3
from openpyxl import Workbook
import datetime
import speech_recognition as sr
import pyaudio
import pyspeech
import wikipedia
import webbrowser
import os
import tkinter as tk
from tkinter import Message ,Text
import cv2,os
import csv
import numpy as np
from PIL import Image, ImageTk
import pandas as pd
import time
import tkinter.ttk as ttk
import tkinter.font as font


engine=pyttsx3.init('sapi5')
voices=engine.getProperty('voices')
#print(voices)
engine.setProperty('voice',voices[1].id)



def speak(audio):
    engine.say(audio)
    engine.runAndWait()



def wishMe():
    hour=int(datetime.datetime.now().hour)
    if hour>=0 and hour<12:
        speak("Good Morning")
    elif hour>=12 and hour<18:
        speak("Good Afternoon")
    else:
        speak("Good Evening")

    speak("i am jessica")
    speak("How may i help you?")


def takeCommand():
    r=sr.Recognizer()
    with sr.Microphone() as source:
        print("Listening...")
        r.pause_threshold = 1
        r.adjust_for_ambient_noise(source, duration = 1)
        audio=r.listen(source)

    try:
        print("Recognizing.....")
        query = r.recognize_google(audio, language='en-in')
        print(f"Command: {query}\n")

    except Exception as e:
        print(e.args)
        print("Say that again please......")
        return "None"
    return query

if __name__=="__main__":
    wishMe()
    while True:
        query=takeCommand().lower()
        if 'wikipedia' in query:
            speak('Searching wikipedia...')
            query=query.replace("wikipedia","")
            results=wikipedia.summary(query, sentences=2)
            speak("According to wikipedia")
            print (results)
            speak(results)

        elif 'open youtube' in query:
            webbrowser.open("youtube.com")

        elif 'open google' in query:
            webbrowser.open("google.com")

        elif 'play music' in query:
            music_dir='F:\Backup(D drive)\songs'
            songs=os.listdir(music_dir)
            os.startfile(os.path.join(music_dir,songs[0]))
        elif 'the time' in query:
            strTime=datetime.datetime.now().strftime("%H:%M:%S")
            speak(f"the time is {strTime}")
        elif 'thank you' in query:
            speak("its my pleasure")
        elif 'register' in query:
            window = tk.Tk()
            window.title("Face_Recogniser")
            dialog_title = 'QUIT'
            dialog_text = 'Are you sure?'
            path = "cc.jpg"
            img = ImageTk.PhotoImage(Image.open(path))
            panel = tk.Label(window, image = img)
            panel.pack(side = "left", fill = "y", expand = "no")
            panel.place(x=0, y=0)
            message = tk.Label(window, text=" Registeration for Attendance " ,bg="#8EB7FC"  ,fg="white"  ,width=50  ,height=2,font=('Helvetica', 30, 'italic bold '))
            message.place(x=100, y=20)
            lbl = tk.Label(window, text="Enter ID",width=20  ,height=2  ,fg="White"  ,bg="Grey" ,font=('Courier', 15, ' bold italic') ) 
            lbl.place(x=200, y=150)
            txt = tk.Entry(window,width=20  ,bg="#CAC9C8" ,fg="Blue",font=('times', 15, ' bold '))
            txt.place(x=500, y=165)
            lbl2 = tk.Label(window, text="Enter Name",width=20  ,fg="White"  ,bg="Grey"    ,height=2 ,font=('Courier', 15, ' bold italic ')) 
            lbl2.place(x=200, y=250)
            txt2 = tk.Entry(window,width=20  ,bg="#CAC9C8"  ,fg="Blue",font=('times', 15, ' bold ')  )
            txt2.place(x=500, y=265)
            lbl3 = tk.Label(window, text="Notification",width=20  ,fg="White"  ,bg="Grey"  ,height=2 ,font=('Courier', 15, ' bold italic')) 
            lbl3.place(x=200, y=350)
            message = tk.Label(window, text="" ,bg="#CAC9C8"  ,fg="Green" ,width=30 ,height=2, activebackground = "yellow" ,font=('Helvetica', 15, ' bold ')) 
            message.place(x=500, y=350)
            lbl3 = tk.Label(window, text="Attendance : ",width=20  ,fg="White"  ,bg="Grey"  ,height=2 ,font=('Courier', 15, ' bold italic')) 
            lbl3.place(x=200, y=570)
            message2 = tk.Label(window, text="" ,fg="Green"   ,bg="#CAC9C8",activeforeground = "green",width=50  ,height=5  ,font=('Helvetica', 15, ' bold ')) 
            message2.place(x=500, y=570)
            def clear():
                txt.delete(0, 'end')
                res = ""
                message.configure(text= res)

            def clear2():
                txt2.delete(0, 'end')
                res = ""
                message.configure(text= res)

            def is_number(s):
                try:
                    float(s)
                    return True
                except ValueError:
                    pass

                try:
                    import unicodedata
                    unicodedata.numeric(s)
                    return True
                except (TypeError, ValueError):
                    pass

                return False

            def TakeImages():
                Id=(txt.get())
                name=(txt2.get())
                if(is_number(Id) and name.isalpha()):
                    cam = cv2.VideoCapture(0)
                    harcascadePath = "haarcascade_frontalface_default.xml"
                    detector=cv2.CascadeClassifier(harcascadePath)
                    sampleNum=0
                    while(True):
                        ret, img = cam.read()
                        gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
                        faces = detector.detectMultiScale(gray, 1.3, 5)
                        for (x,y,w,h) in faces:
                            cv2.rectangle(img,(x,y),(x+w,y+h),(0,255,0),2)
                            sampleNum=sampleNum+1
                            cv2.imwrite("TrainingImage\ "+name +"."+Id +'.'+ str(sampleNum) + ".jpg", gray[y:y+h,x:x+w])
                            cv2.imshow('Face',img)

                        if cv2.waitKey(100) & 0xFF == ord('q'):
                            break

                        elif sampleNum>60:
                            break
                    cam.release()
                    cv2.destroyAllWindows()
                    res = "Images Saved for ID : " + Id +" Name : "+ name
                    row = [Id , name]
                    with open('EmployeeDetails\\EmployeeDetails.csv','a+') as csvFile:
                        writer = csv.writer(csvFile)
                        writer.writerow(row)
                    csvFile.close()
                    message.configure(text= res)
                else:
                    if(is_number(Id)):
                        res = "Enter Alphabetical Name"
                        message.configure(text= res)
                    if(name.isalpha()):
                        res = "Enter Numeric Id"
                        message.configure(text= res)

            def TrainImages():
                recognizer = cv2.face_LBPHFaceRecognizer.create()
                harcascadePath = "haarcascade_frontalface_default.xml"
                detector =cv2.CascadeClassifier(harcascadePath)
                faces,Id = getImagesAndLabels("TrainingImage")
                recognizer.train(faces, np.array(Id))
                recognizer.save("TrainingImageLabel\\Trainner.yml")
                res = "Training Complete"
                message.configure(text= res)

            def getImagesAndLabels(path):
                imagePaths=[os.path.join(path,f) for f in os.listdir(path)]
                faces=[]
                Ids=[]
                for imagePath in imagePaths:
                    pilImage=Image.open(imagePath).convert('L')
                    imageNp=np.array(pilImage,'uint8')
                    Id=int(os.path.split(imagePath)[-1].split(".")[1])
                    faces.append(imageNp)
                    Ids.append(Id)
                return faces,Ids

            def TrackImages():
                recognizer = cv2.face.LBPHFaceRecognizer_create()
                recognizer.read("TrainingImageLabel\\Trainner.yml")
                harcascadePath = "haarcascade_frontalface_default.xml"
                faceCascade = cv2.CascadeClassifier(harcascadePath);
                df=pd.read_csv("EmployeeDetails\\EmployeeDetails.csv")
                cam = cv2.VideoCapture(0)
                font = cv2.FONT_HERSHEY_SIMPLEX
                col_names =  ['Id','Name','Date','Time']
                attendance = pd.DataFrame(columns = col_names)
                while True:
                    ret, im =cam.read()
                    gray=cv2.cvtColor(im,cv2.COLOR_BGR2GRAY)
                    faces=faceCascade.detectMultiScale(gray, 1.2,5)
                    for(x,y,w,h) in faces:
                        cv2.rectangle(im,(x,y),(x+w,y+h),(225,0,0),2)
                        Id, conf = recognizer.predict(gray[y:y+h,x:x+w])
                        if(conf < 50):
                            ts = time.time()
                            date = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d')
                            timeStamp = datetime.datetime.fromtimestamp(ts).strftime('%H:%M:%S')
                            aa=df.loc[df['Id'] == Id]['Name'].values
                            tt=str(Id)+"-"+aa
                            attendance.loc[len(attendance)] = [Id,aa,date,timeStamp]
                        else:
                            Id='Unknown'
                            tt=str(Id)
                        if(conf > 75):
                            noOfFile=len(os.listdir("ImagesUnknown"))+1
                            cv2.imwrite("ImagesUnknown\Image"+str(noOfFile) + ".jpg", im[y:y+h,x:x+w])
                        cv2.putText(im,str(tt),(x,y+h), font, 1,(255,255,255),2)
                    attendance=attendance.drop_duplicates(subset=['Id'],keep='first')
                    cv2.imshow('im',im)
                    if (cv2.waitKey(1)==ord('q')):
                        break
                ts = time.time()
                date = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d')
                timeStamp = datetime.datetime.fromtimestamp(ts).strftime('%H:%M:%S')
                Hour,Minute,Second=timeStamp.split(":")
                fileName="Attendance\Attendance_"+date+"_"+Hour+"-"+Minute+"-"+Second+".csv"
                attendance.to_csv(fileName,index=False)
                cam.release()
                cv2.destroyAllWindows()
                res=attendance
                message2.configure(text= res)

            clearButton = tk.Button(window, text="Clear",relief="solid", command=clear  ,fg="Black"  ,bg="#BFB7F9"  ,width=20  ,height=2 ,activebackground = "Cyan" ,font=('courier', 15, ' bold '))
            clearButton.place(x=925, y=150)
            clearButton2 = tk.Button(window, text="Clear",relief="solid", command=clear2  ,fg="Black"  ,bg="#BFB7F9"  ,width=20  ,height=2, activebackground = "Cyan" ,font=('courier', 15, ' bold '))
            clearButton2.place(x=925, y=250)
            takeImg = tk.Button(window, text="Take Images", relief="groove",command=TakeImages  ,fg="White"  ,bg="Grey"  ,width=20  ,height=3, activebackground = "Green" ,font=('courier', 15, ' bold'))
            takeImg.place(x=200, y=450)
            trainImg = tk.Button(window, text="Train Images", relief="groove",command=TrainImages  ,fg="White"  ,bg="Grey"  ,width=20  ,height=3, activebackground = "Green" ,font=('courier', 15, ' bold '))
            trainImg.place(x=500, y=450)
            #trackImg = tk.Button(window, text="Track Images", relief="groove",command=TrackImages  ,fg="White"  ,bg="Grey"  ,width=20  ,height=3, activebackground = "Green" ,font=('courier', 15, ' bold '))
            #trackImg.place(x=700, y=450)
            quitWindow = tk.Button(window, text="Quit",relief="groove", command=window.destroy  ,fg="White"  ,bg="Grey"  ,width=20  ,height=3, activebackground = "Red" ,font=('courier', 15, ' bold '))
            quitWindow.place(x=800, y=450)
            window.mainloop()
        elif 'attendance' in query:
            def TrackImages():
                recognizer = cv2.face.LBPHFaceRecognizer_create()
                recognizer.read("TrainingImageLabel\\Trainner.yml")
                harcascadePath = "haarcascade_frontalface_default.xml"
                faceCascade = cv2.CascadeClassifier(harcascadePath);
                df=pd.read_csv("EmployeeDetails\\EmployeeDetails.csv")
                cam = cv2.VideoCapture(0)
                font = cv2.FONT_HERSHEY_SIMPLEX
                col_names =  ['Id','Name','Date','Time']
                attendance = pd.DataFrame(columns = col_names)
                while True:
                    ret, im =cam.read()
                    gray=cv2.cvtColor(im,cv2.COLOR_BGR2GRAY)
                    faces=faceCascade.detectMultiScale(gray, 1.2,5)
                    for(x,y,w,h) in faces:
                        cv2.rectangle(im,(x,y),(x+w,y+h),(225,0,0),2)
                        Id, conf = recognizer.predict(gray[y:y+h,x:x+w])
                        if(conf < 50):
                            ts = time.time()
                            date = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d')
                            timeStamp = datetime.datetime.fromtimestamp(ts).strftime('%H:%M:%S')
                            aa=df.loc[df['Id'] == Id]['Name'].values
                            speak(f"hello {aa} i have marked your attendance")
                            speak("you can go now")
                            speak("Thank you")
                            tt=str(Id)+"-"+aa
                            attendance.loc[len(attendance)] = [Id,aa,date,timeStamp]
                        else:
                            Id='Unknown'
                            speak("i cant recognise you")
                            speak("please register yourself")
                            tt=str(Id)
                        if(conf > 75):
                            noOfFile=len(os.listdir("ImagesUnknown"))+1
                            cv2.imwrite("ImagesUnknown\Image"+str(noOfFile) + ".jpg", im[y:y+h,x:x+w])
                        cv2.putText(im,str(tt),(x,y+h), font, 1,(255,255,255),2)
                    attendance=attendance.drop_duplicates(subset=['Id'],keep='first')
                    cv2.imshow('im',im)
                    if (cv2.waitKey(1)==ord('q')):
                        break
                ts = time.time()
                date = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d')
                timeStamp = datetime.datetime.fromtimestamp(ts).strftime('%H:%M:%S')
                Hour,Minute,Second=timeStamp.split(":")
                fileName="Attendance\Attendance_"+date+"_"+Hour+"-"+Minute+"-"+Second+".csv"
                attendance.to_csv(fileName,index=False)
                cam.release()
                cv2.destroyAllWindows()

            TrackImages()