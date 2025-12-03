#include <stdio.h>

int main() {
    int n, i;
    int nilai = 0;   // untuk menyimpan nilai deret

    printf("Masukkan jumlah deret (n): ");
    scanf("%d", &n);

    for (i =0; i < n; i++) {
        nilai = i * (i + 1) / 2;       // rumus deret segitiga
        printf("%d ", nilai);
    }

    return 0;
}
