dev.off()
a<- read.csv("My_Data.csv")
a
x<-c(a$Gross.rate)
x
y<-a$Rate.of.reforestation
y
ColorPic<-c("#94f0f1","#0e0fed","#f2b1d8","#e05915" ,"#ffdc6a")

years<-c(1930-1975,1975-1985,1985-1995,1995-2005,2005-2013)

pie(x,labels = x,xlab="Gross Rate", main = "Deforestation From 1930-2013",col = ColorPic )
plot.new(x,y)
legend("topright", c("1930-1975","1975-1985","1985-1995","1995-2005","2005-2013"), cex = 1,
       fill = ColorPic, title="Years")

