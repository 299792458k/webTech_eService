<link rel="stylesheet" href="/webTech_eService/mvc/Views/Admin/styles/block.css">
    <!-- footer starts -->
    <footer>
        <style>

        section {
    padding: 1.5rem 9%;

}

.btn {
    display: inline-block;
    padding: .8rem 3rem;
    border: .2rem solid var(--orange);
    color: var(--orange);
    cursor: pointer;
    font-size: 1.7rem;
    border-radius: .5rem;
    position: relative;
    overflow: hidden;
    z-index: 0;
    margin-top: 1rem;
}

.btn::before {
    content: '';
    position: absolute;
    top: 0; right: 0;
    width: 0%;
    height: 100%;
    background: var(--orange);
    transition: .3s linear;
    z-index: -1;
}

.btn:hover::before {
    width: 100%;
    left: 0;
}

.btn:hover {
    color: #fff;
}

.footer {
    margin-top: 1.5rem;
    text-align: center;
    padding-bottom: 2rem;
    background-color: #000;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
}

.footer .logo {
    font-size: 2.5rem;
    font-weight: bold;
    color: #fff;
}
.footer .logo i {
    color: var(--orange);
    padding-right: 1rem;
}

.footer h1 {
    font-size: 2.5rem;
}

.footer span {
    color: var(--orange);
}

.footer .website {
    padding: 1rem 0;
}

.footer h3 {
    font-size: 1.5rem;
}
</style>
    <section class="footer" id="footer">
        <a href="" class="logo">
            <i class="fas fa-utensils"></i>Food4U
            <h3>Hân hạnh được phục vụ <span>bạn!</span></h3>
        </a>
        <div class="content_footer">
            <div class="website">
                <h1>Our <span>website:</span> </h1>
                <a href="" class="btn">facebook</a>
                <a href="" class="btn">instagram</a>
                
            </div>
        </div>
    </section>
    <!-- footer ends -->
    </footer>

