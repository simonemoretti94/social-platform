<footer>
    <p id="p-footer"><a href="<?= $headName == 'ER-graph_renderer' ? '../../index.php' : './index.php' ?>">All rights reserved | Simone Moretti</a></p>
</footer>
</body>

<style scoped>
    footer {
        display: grid;
        place-items: center;
        min-height: 50px;
        background: linear-gradient(180deg, #52057b, #681b91, #7722a5, #681b91, #52057b);
        border-top: solid 1px black;

        >p {
            margin-top: 1rem;
            text-align: center;

            >a {
                color: white;
                font-weight: 300;
            }
        }
    }
</style>

</html>