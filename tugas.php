class Kendaraan:
    def __init__(self, merk, tahun):
        self.merk = merk
        self.tahun = tahun

    def info_kendaraan(self):
        return f"Kendaraan ini adalah {self.merk} tahun {self.tahun}"

# Contoh penggunaan:
kendaraan1 = Kendaraan("Toyota", 2020)
print(kendaraan1.info_kendaraan())

kendaraan2 = Kendaraan("Honda", 2019)
print(kendaraan2.info_kendaraan())

class Kendaraan:
    def __init__(self, merk, tahun):
        self.merk = merk
        self.tahun = tahun

    def info_kendaraan(self):
        return f"Kendaraan ini adalah {self.merk} tahun {self.tahun}"

    def usia_kendaraan(self, tahun_sekarang):
        return tahun_sekarang - self.tahun

    def catat_penggunaan(self, total_jarak):
        # Anggap kendaraan dipakai 15.000 km per tahun
        usia_kendaraan_tahun = self.usia_kendaraan(2023)
        estimasi_penggunaan = usia_kendaraan_tahun * 15000 + total_jarak
        return f"Estimasi total penggunaan kendaraan: {estimasi_penggunaan} km"

# Contoh penggunaan:
kendaraan1 = Kendaraan("Toyota", 2020)
print(kendaraan1.info_kendaraan())
print(kendaraan1.usia_kendaraan(2023))
print(kendaraan1.catat_penggunaan(5000))

kendaraan2 = Kendaraan("Honda", 2019)
print(kendaraan2.info_kendaraan())
print(kendaraan2.usia_kendaraan(2023))
print(kendaraan2.catat_penggunaan(8000))
