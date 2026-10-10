// Q 1
// #include<iostream>
// using namespace std;
// int main()
// {
//     int num ,digit,largest =0;
//     cout<<"enter a number:";
//     cin>>num;

//     while(num>0)
//     {
//         digit=num%10;

//         if(digit>largest)
//         largest=digit;

//         num=num/ 10;
//     }
//     cout<<"largest digit="<<largest;
//     return 0
// }
#include<iostream>
using namespace std;
class number
{
    int num;

    public:
    void input ()

    {
        cout<<"enter a number:";
        cin>>num;
    }
    void isEven()
    {
    if(num%==0)
     cout<<"enter a even"<<endl;
     else
cout<<"enter a odd"<<endl;
    }
    
}