document.addEventListener("DOMContentLoaded", () => {

    const overlay = document.getElementById("transactionOverlay");
    const closeBtn = document.getElementById("closeDetails");
    const saveBtn = document.getElementById("saveTransaction");
    const rows = document.querySelectorAll(".transactions-table tbody tr");
    

    if (!overlay || !closeBtn || rows.length === 0) {
        console.warn("Transactions JS : éléments non trouvés");
        return;
    }

    rows.forEach(row => {
        row.addEventListener("click", (event) => {
            if (event.target.closest("button, input")) return;

            overlay.classList.add("active");
            document.body.classList.add("overlay-open"); 

            const name = row.querySelector(".user-info strong");
            const email = row.querySelector(".user-info small");
            const amount = row.querySelector(".amount");
            const status = row.querySelector(".status");

            document.getElementById("detailName").textContent = name?.textContent ?? "—";
            document.getElementById("detailEmail").textContent = email?.textContent ?? "—";
            document.getElementById("detailAmount").textContent = amount?.textContent ?? "—";
            document.getElementById("detailStatus").textContent = status?.textContent ?? "—";
        });
    });

    closeBtn.addEventListener("click", () => {
        overlay.classList.remove("active");
        document.body.classList.remove("overlay-open"); 
    });

    saveBtn.addEventListener("click", () => {
        overlay.classList.remove("active");
        document.body.classList.remove("overlay-open");
        console.log("Transaction enregistrée !");
    });

    overlay.addEventListener("click", (e) => {
        if (e.target === overlay) {
            overlay.classList.remove("active");
            document.body.classList.remove("overlay-open"); 
        }
    });

});