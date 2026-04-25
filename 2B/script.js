const bahasa = {
    id: {
        // Navbar
        daftar: "Pendaftaran",
        program: "Program Studi",
        inter: "International Programs",
        west: "Ubaya West Campus",
        fasilitas: "Fasilitas",

        berita: "Berita dan Artikel",
        penghargaan: "Penghargaan",

        // Sambutan Rektor
        titleSambut: "Sambutan Rektor",
        isiSambut: "Universitas Surabaya (UBAYA) yang berdiri sejak 11 Maret 1968, telah mencapai fase lima puluh tahun (usia emas) pada tahun 2018. Sejak awal berdirinya sampai saat ini dan di masa yang akan datang, UBAYA tetap memiliki komitmen utuh untuk mengutamakan kualitas."
    },

    en: {
        // Navbar
        daftar: "Registration",
        program: "Study Program",
        inter: "International Programs",
        west: "Ubaya West Campus",
        fasilitas: "Facility",

        berita: "News and Articles",
        penghargaan: "Award",
        
        // Sambutan Rektor
        titleSambut: "Rector's Speech",
        isiSambut: "The University of Surabaya (UBAYA), which was founded on March 11, 1968, has reached its fifty-year milestone (golden age) in 2018. Since its inception until now and in the future, UBAYA remains fully committed to prioritizing quality."
    }
};

function gantiBahasa(x){
    document.getElementById("menu-daftar").innerText = bahasa[x].daftar;
    document.getElementById("menu-program").innerText = bahasa[x].program;
    document.getElementById("menu-international").innerText = bahasa[x].inter;
    document.getElementById("menu-west").innerText = bahasa[x].west;
    document.getElementById("menu-fasilitas").innerText = bahasa[x].fasilitas;
    document.getElementById("news").innerText = bahasa[x].berita;
    document.getElementById("award").innerText = bahasa[x].penghargaan;
    document.getElementById("title-sambutan").innerText = bahasa[x].titleSambut;
    document.getElementById("isi-sambutan").innerText = bahasa[x].isiSambut;

}

document.getElementById("btn-en").onclick = () => gantiBahasa("en");
document.getElementById("btn-id").onclick = () => gantiBahasa("id");
