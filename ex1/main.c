#include <stdio.h>

int main()
{
    int i = 1;
    while (i <= 100)
    {
        if (i % 3 == 0 && i % 5 == 0)
            printf("HiBy");
        else if (i % 3 == 0)
            printf("Hi");
        else if (i % 5 == 0)
            printf("By");
        else
            printf("%i", i);
        printf(" ");
        i++;
    }
    return (0);
}