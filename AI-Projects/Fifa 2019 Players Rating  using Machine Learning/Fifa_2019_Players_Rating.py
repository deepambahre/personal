import matplotlib.pyplot as plt
import pandas as p
import numpy as np
from sklearn import preprocessing
from sklearn.model_selection import KFold,cross_val_score
from sklearn.ensemble import RandomForestClassifier
from sklearn.svm import SVC
from sklearn.neighbors import KNeighborsClassifier
from sklearn.metrics import accuracy_score,confusion_matrix
from sklearn.linear_model import LogisticRegression
from sklearn.tree import DecisionTreeClassifier
from sklearn.naive_bayes import GaussianNB
from sklearn.discriminant_analysis import LinearDiscriminantAnalysis as LDA


d=p.read_csv("playerset.csv")
d=d.replace(np.nan,0)
#d.isnull().sum()

le=preprocessing.LabelEncoder()
ohe=preprocessing.OneHotEncoder()
for col in d.columns:
    if d[col].dtype=="object":
        le.fit(d[col].values)
        d[col]=le.transform(d[col])
        ohe.fit_transform(d[col].values.reshape(1,-1))


data=d.values
X=data[:,0:44]
y=data[:,-1]
print(X)
print(y)


kfold=KFold(10,random_state=7)
models=[]
models.append(("KNN",KNeighborsClassifier()))
models.append(("Decision Tree",DecisionTreeClassifier()))
models.append(("RF",RandomForestClassifier()))
models.append(("LG",LogisticRegression()))
models.append(("NB",GaussianNB()))
models.append(("LDA",LDA()))
models.append(("SVM",SVC()))


result=[]
names=[]
accuracy=[]
for name,model in models:
    v=cross_val_score(model,X,y,cv=kfold)
    result+=[v]
    model.fit(X,y)
    p=model.predict(X)
    print(accuracy_score(y,p))
    print(p)
    names.append(name)
fig=plt.figure()
fig.suptitle("Performance")
ax=fig.add_subplot(111)
plt.boxplot(result)
ax.set_xticklabels(names)
plt.show()
print (np.mean(result))
