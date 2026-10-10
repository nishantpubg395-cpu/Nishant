import matplotlib.pyplot as plt 
from sklearn.linear_model import LinearRegression
X=[[1,2],[2,3],[3,4],[4,5]]
Y=[10,15,20,25]
model= LinearRegression(). fit(X,Y) 
pred= model.predict(X)

plt.scatter(Y, pred)
plt.xlabel("Actual")
plt.xlabel("predict")
plt.show()
