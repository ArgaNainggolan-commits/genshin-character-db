#include "date.h"
#include <stdio.h>

DATE MakeDATE(int tg, int bl, int th) {
    DATE D;
    setTanggal(&D, tg);
    setBulan(&D, bl);
    setTahun(&D, th);
    return D;
}

int getTanggal(DATE D) {
    return D.tanggal;
}

int getBulan(DATE D) {
    return D.bulan;
}

int getTahun(DATE D) {
    return D.tahun;
}

void setTanggal(DATE *D, int newTgl) {
    D->tanggal = newTgl;
}

void setBulan(DATE *D, int newBln) {
    D->bulan = newBln;
}

void setTahun(DATE *D, int newThn) {
    D->tahun = newThn;
}

void BacaDATE(DATE *D) {
    int tg, bl, th;
    printf("Masukkan tanggal: ");
    scanf("%d", &tg);
    printf("Masukkan bulan: ");
    scanf("%d", &bl);
    printf("Masukkan tahun: ");
    scanf("%d", &th);
    *D = MakeDATE(tg, bl, th);
}

void TulisDATE(DATE D) {
    printf("(%d - %d - %d)\n", D.tanggal, D.bulan, D.tahun);
}

int IsValidDate(int tgl, int bln, int thn) {
    // Kode validasi tanggal, bulan, dan tahun bisa ditambahkan di sini
    // Contoh: return 1 jika valid, 0 jika tidak valid
    return 1;
}

DATE nextDate(DATE D) {
    // Implementasi penambahan satu hari ke tanggal D di sini
    return D;
}

DATE prevDate(DATE D) {
    // Implementasi pengurangan satu hari dari tanggal D di sini
    return D;
}

int selisihDate(DATE D1, DATE D2) {
    // Implementasi perhitungan selisih hari antara D1 dan D2 di sini
    return 0;
}
