<?php
$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.
    id_sanpham = '$_GET[id]' LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>
    <div class="container">
        <div class="containerbtn_product">
            <section class="section-product">
                <div class="section-header">
                    <h2 class="section-title"><?php echo $row_chitiet['tensanpham'] ?></h2>
                    <div class="section-sub-title">
                        <div class="sku-code">Mã sản phẩm: <i><?php echo $row_chitiet['tensanpham'] ?></i></div>
                    </div>
                </div>
            </section>
            <section class="product_main">
                <div class="product">
                    <div class="product_container">
                        <div class="img-magnifier-container">
                            <img id="myimage" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
                        </div>
                    </div>
                </div>
                <div class="body__left">
                    <div class="column is-half">
                        <div class="box-warranty-info">
                            <div class="box-title">
                                <p>Thông tin sản phẩm</p>
                            </div>
                            <div class="box-content warranty-info">
                                <div class="item-warranty-info">
                                    <div class="icon"><svg height="15" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                                            <title>
                                                mb</title>
                                            <image width="35" height="50" transform="translate(7.5)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAyCAYAAADWU2JnAAAABHNCSVQICAgIfAhkiAAAAWRJREFUWEftmcFNw0AQRf+sG6ADoAJCBUAHlJDL7hW7ApIOcrS8PpgKKAHTQaiAlOBcfdhBIxHJRgFpbWT7MHuLtM78efu0hx0CAOfcM4A1gCv5PdVi5oaIamNMluf5gZxzGwASZrbFzHvv/a2E+ZyayLmuQwgPEoZnQ9IvnC0pzHbRYbIQwn6qYzPG7ADcfNfrkxGJyrKspwpjra2J6E7D/CSuZH5zUMkomdj7SZ1RZ9SZWALqTCwxvWfUGXUmloA6E0tM7xl1Rp2JJaDOxBL7855h5hTAZC9XAHZEtDr7WBTb2T/vX/YDY2yzL23bplVVNc65RwCvsX/Q2T+KzLEoiotucWutOPA0MNDwMMz87r2/7xYeOYcYHkZCGGOuZRpyCmStfSOiXsAISluy1h6I6DLio+5WCbIJITTGGBkRiTeD1mmQMfuIB8BHURQrkjbkrJl5PYLQIBoAjsxcJ0mSynF/AXY82KKEipF6AAAAAElFTkSuQmCC"></image>
                                        </svg></div>
                                    <div class="description">Mới, đầy đủ phụ kiện từ nhà sản xuất</div>
                                </div>
                                <div class="item-warranty-info">
                                    <div class="icon"><svg height="15" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                                            <title>
                                                box</title>
                                            <image width="50" height="50" transform="translate(0 -4)" xlink:href="data:image/png;base64,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"></image>
                                        </svg></div>
                                    <div class="description">Máy, cáp, sách hướng dẫn, que chọc sim</div>
                                </div>
                                <div class="item-warranty-info">
                                    <div class="icon"><svg height="15" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                                            <title>
                                                bh</title>
                                            <image width="50" height="50" xlink:href="data:image/png;base64,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"></image>
                                        </svg></div>
                                    <div class="description">Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất.<button onclick="document.getElementById('id11').style.display='flex'" class="w3-button w3-black" style="border: none; background-color: #fff; color: #f30;">(Xem chi tiết)</button></div>
                                </div>
                                <div class="item-warranty-info">
                                    <div class="icon icon-vat"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="232" height="163" viewBox="0 0 232 163" fill="none">
                                            <rect width="232" height="163" fill="url(#pattern0)"></rect>
                                            <defs>
                                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                    <use xlink:href="#image0_1115_3" transform="matrix(0.00431034 0 0 0.00613497 -0.413793 -0.742331)"></use>
                                                </pattern>
                                                <image id="image0_1115_3" width="416" height="416" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAaAAAAGgCAYAAADsNrNZAAAgAElEQVR4nO3deXxU1fk/8Oecc++dJZOZrAgIiCAgqNAKqEXBpW61rihaFfv7WlTcCoKA4vZ1qyCKqBXF3X7VtopLhaKlldqiuCFbXQEpKqsh2ySz3uWc3x+ZMw6RLZCQTPi8X6+8Aknm3nMnmfvMOec5zyECAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgBamlOKt3QYAANiHKaXY3j6XUorvzfPCjuEXAQAtTinF//3vfx/72WefDaioqOhYU1NT4vP50h06dPi+R48eq372s599sP/++69rrvO98MILF3344YdDTdN0HcfxmaaZ9jyPExHFYrHC008//S/Dhw9/rbnOBwAAbYhSin/66af9TzvttPlFRUXx4uLiVMeOHZOdO3e2999/f7X//vvL/fbbz+3QoYNdUlKS7tmz53fPPPPMZXt63vXr13cJhULxzp07xzp16uR27drV7tixY7Jbt27fd+jQoapz587NFuhgz6AHBADNTinFb7755ntmzpx5TWFhYTAYDJIQgnQvhHNOSin9s8Q5J9u2KRaLuQceeOCKDz/8cDBjTO3OuQ8//PCllZWV/QKBgEVEzDAMchyHlFLRzZs38yVLlvykd+/e/22+q4XdhclAAGh2d999962PPvrouPLy8lBhYSFnjHEi4kopMk2TpJTEOSfOOQkhiIjINE0qLi42vv3224GDBg1atjvnHTNmzMyNGzf2CwQCBmtAjuMQY8yura313XbbbXch+LQd6AEBQLNas2ZNtwEDBnzZqVOnYKbXQ6ZpklKKlFJk23a292MYBnHe8D6YMUaMMZJSUlVVlZo0adItkyZNumdXz/uvf/1r6DnnnLOwvLxcMsY4Yyx73Lq6OrtPnz6LFixYcCJjTLbAZcNuQAACgGajlGKXX375/7311lsjCwsLswGFiCgWi1EqlYr369dvZceOHSsSiURo5cqVvWOxWFlhYSEXQpDrumRZFjmOQ7ZtV3z77bf77eq5u3TpskEI0TkYDGaDHRGR4zgqnU5vXr9+/UGMsYRSiu3u8B40LwzBAUCzYYyp+fPnn1JQUEBSSvI8jzjnVFdXR0cfffTcqqqq0Lvvvjvw5ZdfPn3evHlDv/766/1uueWWcdFo1NXDczpw1NTUdFi6dOmAXUmbPuuss+YRUSQYDHo6+BiGQVJKikaj8rHHHruKMZbQbWzZZwF2FQIQADSb2tra4kQiUaDneAzDoFQqRUVFRWtfeumls/XPMcY8/e9rr7324QsvvPCpeDxOes7GNE0KBAJy+fLlO01GePrpp0e99957JxcUFFhSSqGH9Gzbpvr6eu+MM87485lnnvlGi1007DYEIABoNhs2bOhk23aQiHTWG0kp7TPOOGMuY0xurwrCxRdf/EwqlVJSyuwQHGNMfvPNNz2IiJRSYluP27JlS6eJEydOLy4uZkRk6nkfpRR5nueVlpaufu6550a2zNXCnkIAAoBmU1dXVyiEIJ/PR67rEhGR4zhuSUlJFRFR4yCkh9c6duy4wbZtxhgjpRQxxsgwDDuVSgUyj/O2cTo69dRT3wqFQoVCCKFTux3HIc65U1NTk/jTn/50fotfNOw2BCAAaDahUCiZm3hARGRZFotGo8U5gSc7p6OH17Zs2dLJMAzFOc/OG7mua+iMtcY9IKUUv+GGGx5Yv379YZZlccZYdm2REIIqKyvNiRMnTuvfv/+nLX/VsLsQgACg2ZSXl292HIeklCSEoExgCLz33ntDM70fxhjzdDDSPaAPPvhgqN/vT7mum32clJJ17dr1W6If94Def//9I5944okrQqEQ9/l8RNQw52MYBsXjcfeQQw5576abbrp7L18+NJHR2g2A1qfTUpVSLBqNFm3evLlDfX19xPM8S+mUpDaM6YH/fdTu/o525XGccyml5EIIpZRSRx111Ic7SmPu2LFjRYcOHaJKqYjORvP7/fTpp5/2fffdd49hjL1H1DAUl/msiIgeeuih8cFg0NC9Jyklua7LDz300B/1YJRSrFevXi+Fw+EC0zSzSQuZx8h0Oh194403ziwqKtqdpwX2IgSgfYhSSmTefQrGmBeNRkvmzp17xhVXXPHzvn37DikvL9/P8zzTdV0fEZFpmqoNVQ7e2c1yd9rZ0sG1rTx3msr5nPvRGMt8EGNMpdNpw+fz2Z7nsbKyssSCBQvOIaJ3tneSww8/fOnnn39+fCAQaDiZUlRaWhocMWLEXx555JG7L7nkkv8Lh8N1RCQXLFhwwsSJE2dWVVV1NE3T5JznDt/FjzvuuHeUUjx3KO7CCy98ub6+fv/S0lJyXZdM08z2fjZs2OA999xzVxQVFdU0w/MFLaytvUCgheS+a33kkUeue/bZZy/9+uuve/t8Pm4YBvf7/WSapsqsRudExDLBJ/emlYtt5zO0LY2Djf6QtHUAUvRD4GHUMDzPOedKKcWEEF4ymfRJKd3q6urk2rVru5aUlESzJ/mhFy1ee+2180aPHv1iSUmJ0Gtx9LxONBpNpFIppofZGGM8FAr5LMvKzuFkfk4OGTLkL7Nnzz4392L+8Ic//L8JEyY8GYlETNM0iYiyqdvRaJR++ctfvvDMM8/8P1Q7yA+4aewjotFoyeTJk6f+8Y9//JXP5zN8Pp/p8/kMPXmrJ39zx+6llLSPj261d9vr/WQ5jkN+v59c1yXOOTHGqKKiwr399tsnXnvttQ9u78ADBw5c+v333x/q9/tNnRHX+G9JZ8nlfl+X6qmuro5+8cUXh+Vu0fDdd991Hjx48KehUKjIsiyulMrWlLNtW1mWtebLL7/sg+CTPzAE184ppdikSZOmd+/efZRlWaHy8nLKvHPkOti4rkt68le/C9WpsNCu7fQX7PP5yPO87N9E5oZvfP/99/vv6HFz5849edCgQSts2y7nnJtCiGyFA/13ZVlW9pia67oUjUYT06dPn5AbfJRS/Oijj/6Lz+cLm6bJdUDUVbRramqSf/vb3y5E8MkvCEDt2IIFC07o0aPHHxKJxH6lpaWm3+8n27bJcZxsBWL9LlT/P/cmgR4Q6L8BXV1ASkmpVIqOPvrof+n5wW0lJHTu3Lly48aNA4YPHz5v5cqVhwcCAVFYWEhKKaaUIp/PR+l0WqdbE2OMYrFY2vO85OOPP37FiBEjZuce73//93/vXLly5aCSkhJG9EMRU8/zVCwWk+PHj592xBFHLNkLTwk0I9xd2hk9Fj9+/PiHn3rqqdElJSWWZVmUW5VYBxfbtsmyLPK8HzJc9TAc0Q9BCIAxRrZtUyqVokMPPXTRv/71r2N29bFvvfXWKU8//fRV77///pB4PB5ijAkppcUYU0KIlFJK9erVa+VFF130/NixYx/KSddWRERLliwZeNxxx73btWtXIaW0dDBMp9Nk27bdrVu3Je+9994x6P3kHwSgdmjo0KHvr1y58qiioiKWO6QmhCAp5Val8DMvYieZTBqO41AgEIiXl5dXFBUVRYUQeqK6sV3+u2mOLLomplk35Wd3NwuuuV432z3/tlKk96CI5rYe16RjKaVYMBiMnXzyyW+NGzdu2m62g5RSwTVr1nSORqORgoKCWDAYrO/WrdvGHfy86Nev38pkMtnd5/MJ/aeQeWOUrK2tja9evbpPJBKp3t02QevBEFw7opQK9uvXb/maNWsOLC0tZXqCNnd+x3VdMgyDEomEV11dLf1+f/TnP//52+eff/6LQ4cO/aCwsLBarwlC1WBo7K233tqjx2cqUn/d+Os5WXQ8tydz8cUX/6mmpqZLJBLZan+fTDae8fjjj18dDodr96hR0GrQA2onlFL+Pn36fGbbdpdgMOhLp9M62UB/X9fJUpWVlfLwww//aPLkyfeccsopbyLQQFv0pz/96aLRo0c/27VrV8913QAR6eQYLxqNusOGDZv70ksv/Wp7deKg7UMAageUUnzQoEFLt2zZ0tc0TYtznp3bye0FRaNR74ADDvj8scceu3zQoEFL8MKFtkb3gKqqqsIHH3zwf4uLi4NKqYBOkiEichwnxTlft3r16t6t2FRoBqgF1w6cc845czdt2nRoMBi0fD7fVmt6MpPHsqamJnn99dffvnjx4sMHDx78MYIPtEV6+O2cc875m8/nK2CMBfTQG+ecHMeR1dXVzp///OcLd3Sc3LnHNlTNAxpBAMpjSiljxowZ4999991TQ6GQ0Ot5MivMyTRNSqVSbjqd3jJ//vxjbrzxxrsReKCtu+eee25ZtmzZkUVFRUZmWwYiIvI8T9bV1dHVV1898/DDD1++o2PoeUwEn7YNv5w8tmXLlk69evX6sqysLKJ3n5RS6orA5LquFwgEvvnwww8H5pZNAWir/vOf/xx2zDHHLOrYsaPFGPMRUXaxqed5qY4dO376wQcfHLmtecstW7YUvvrqqxcvWrTouLVr1x5YVVUVsW3bDIfDdaWlpTWHHnroZyeeeOL8008/fd7evzLYFgSgPKWU4kOGDPlww4YNA4PBYO4GX8QYo3Q67Qkhvlu9evWhmcwjgDZNKcX79u37ZTqd3t+yrAJdmkcIQel02qutra396quvDisvL9+U+7iqqqrw6NGjn3vzzTdPC4VCyrIswzAMZRiGTUSu53lKSskcxzGSyaTBGEvdddddN11zzTWPttKlQgbSsPOQUor99a9//eVXX331kw4dOnBdQVgXckwmk5ROp2sXL148DMEH8sX//M///CGTcm3pv+mcUjveww8/fF3j4LN8+fJD+vbt+45hGEVdu3ZlnHMjZwkVJyLXNE3JGGOe51lFRUVuKpUyb7311vvPOOOM0+bOnXv6Xr9QyEIPKE/17t37G8dxDvD5fGQYBqVSKbIsixzHoZqaGu+ZZ54598wzz3yjtdsJsCtee+214ZdffvkLZWVljIj8etG0lJLi8bh7xBFH/O31118/I/cxSimzc+fOGwKBQLHP52Ou6wq9L1DuglVd7zC36K7jOKl4PO6ee+65L86cOfNaxpjbGte9r0MAykOvvfba8NGjR79cXFws9IvN7/dTKpWiRCLhHX/88a+98MIL57d2OwF2xZYtWwr79++/OhAIFBmG4dNBwjAMchzHTaVSW9atW9elcamdUaNGPf/mm2+eHwqFLF0bLlPb0I3H42TbtqGUIsuy0pZlGaZpCp2gk8moS2zatIk+++yzQ7t37762da5+34YAlIeGDh368bp16wb7/f5sEdF0Ok1CiGRVVZW7ZcuWItTFgnwxdOjQdzds2HCY3+8PSymZDiScc+f7779333jjjZOGDRu2qPHjioqK4uXl5UHTNLPLDpRSidraWu/UU09968QTT/y7ZVnpDRs27P/qq6+OWLt27U8ikYjQ20pIKVVdXV3qzDPP/OPjjz9+WWtcO0Be2bBhQ9dIJJLs06eP6tu3r+rdu7c6+OCDVe/evVWHDh3UPffcc0trtxFgV913330Ty8vLkwcddJCb+7fct29fr6SkRE2cOPGBbT1u/vz5JxUXF7uNXgOyU6dOW7755psDt/WY22677Z7y8nJ18MEHqz59+uiPRPfu3b9TSmFJSivAk55nXnjhhV8HAgFTj2vrNRKZoYXam2666e5WbiLALlm5cuXBd9999x2RSIQbhiF0levMMgLvwAMPXDpt2rQJ23rsihUrBupdVIkaUrUTiURq0qRJU7Y3nHbHHXfcXFxc/E06nc6ex/O8QGVlZVmLXCDsFAJQHlFKsddff32E3+8XeozcdV1SSlE8Hqezzz779dZuI8CuOv300+eUlpa6jDFLz8u4rkvpdFqmUqn6N95446zcoeTcXsrXX3/d2zRNpTPlPM+j+vp6NXz48L9kfvZH0wuMMTVs2LB/K6WkEIIcxyHLssiyLFlZWbnf3rlqyIUAlGdWrVrVx7Ks7KJTxhhZluUkEgn3sssum9Xa7QPYER0YRo0a9Vw8Hu9omqalg0Hmb9mtqanx7rrrrpu6dOmyPvexucFISimISOkst0yxXRUMBrfs6PxlZWWVmUWt2ew427aD9fX1Fobh9j484Xnk/fffP4oxZiilyPO8bMmdRCJhBgKBusGDB3/c2m0E2BHGmHrzzTd/MXv27EtCoZBJRD4hBOkgVF1dzY455pj5V1xxxRM7Oo7P50tm9gzJbjdiGIZ0HKdYKSV0KZ7Gj6uuri4TQsjcRa6MMWUYhoPEnb0PASiPLF269AjOOff5fJSz2I48z6NBgwZ90opNA9glSqnAlVde+Xh5eXmKc+7TvXgpJXmeJw3DqHjjjTfO2dkWIZ07d94kM7vS6TU/Qggxd+7cMxhjXs7+QrlFSfnChQuPNU3T0CMImfPbXbt23WHPCVoGAlAeWbt2bS/TNKUeriBqKL1j27b305/+dHErNw9gp0466aR5RFRkGIbpeR6zLItSqRQJIeTmzZvt559//iLGmLuz4bB+/fqtsG3b1G/EOOdUWFgY/N3vfndLbW1tsQ5guYHsgQcemLhly5bulmXpZQskpVSFhYU1jDGnJa8btg0BKI+sXr36YNM0ha73RtTwwkun02LgwIHoAUGbNmPGjPHLly8f6vf7fURkWpaVHT6rqalhV1555ePHH3/8v4i2nu/JpXs0Z5999puu69p663LHcSizLm6/7t27rxs7duysOXPmnPuPf/zjlOeff/7Sk08+edHUqVOnFhcXk66wrZSidDrtnnTSSf/ca08CbAULUfPIkCFDlm7evPmnfr9/qzmgzZs309///vcjMQcEbdXKlSsPPvLIIz/u0KGDnzFmEv0wdBaPx6mkpOSzFStWHNaUreAvvPDClxcuXDi8oKBA6MWoejgvkUh46XSaGGNcSskCgQAFg0EiomzNRNd1aePGjan3339/8IABAz5rqWuH7UMPKI+k02lL93700INSiqSUFAqFalu5eQDbNWLEiNcjkUiAc27qrDXOOSmlVDKZrHnllVfOJtp6yGxnpk+ffrXjONFUKkVEpOeRiIgoFAqJ4uJiUVRUxMrKyigUClFmykhvTU/xeNw5++yz5/Tv3//LZr9g2CUIQHnEdV2DMUae55EuJ5L5OoXD4WQrNw9gm6655prHKyoqugWDQel5HnmeRz6fj9LpNFVUVLh33HHHbb169VrT1ON27ty5cvbs2efU1dXV19XVufrNmS7Kq+vD6XMSUXbhdl1dndutW7dlL7744gXYpLH1IADlkczwxFbVfvUwXDqdxu8S2hSllMjMwfwmGAxajDFDp03btk2pVMo7+uij37n66qtn7u45jj322IX/+c9/Du7Ro8eHmzdvdurq6uxotGHvRdu2s3NMjuNQMpmk7777jqqqqmKXXXbZ9A8//PDIZrtY2C2YA8ojAwYM+CoWi/UxTTP7NSklVVZW0kcffXTQ7ryLBGgJSileU1NT2L1797WMMWFZlielNIUQUicOcM4Tmzdv7sUYizfD+djKlSt7v/zyyxe99957x3/33Xfdamtrw0opZhiGU1RUVPOTn/zkP6eeeurckSNHvsQYS+/5VcKeQgDKI9sKQEREmzZtohUrVvRASXkAyCcYtskveMMAAO0GAhAA5D2llGjtNkDTIQABQN7T5Xdaux3QNAhAAJCXGgecpqwhgrYBAQgA8tK2Ao5SymiNtsDuQQACgLyjlOKPPvroNQMGDFhZWloau+CCC15fu3Ztd8aY29ptg12HAJRfMMYNQEQ33XTTlMmTJ8+ora3tVVpayhcuXHjKoEGDlvz3v/89oLXbBrsO3VUAyCtKKV9xcfG1HTp0UEIIxhgLFBUVxWtqasybb775fiIa0ZSiptB60AOCFqOU8mU+85yv5W4QZm7rcS3YHqaUMhpPXusU3sz3A7t5bENfZ+N5CKUUV0pZe9BuM3MM1qi9Lf76VUqJtpZdtm7dulLHcYJCCJcoW5DXCoVC6VWrVvVE8Mkf6AFBi/juu+86c87XFRcXp4qKioySkhKXMaaKioqM0tJSR0rJCwoKrMsuu+zFJ5988tKWvGFktmj2Jk+efO9DDz00xrIsWVpaKqWUQkrJysvLvUgkIoqKilQ0GvVFo9GySCRS3YTjs7Kysi2u6wYjkYgsKyuj0tJS5jiOICJVVlbm1tfXG7Nnz754xIgRs5vYdqNr167/raurKyciCofDrGPHjnYoFPIXFRWp4uJiXUhTP3+5wYI1+t52T0M/Ht5VRMQYY/5XX311OBG93pR2tyTbtoN6K20ppa6qLTjnIplMBhB88gcCUH7JmxdWt27dNp577rlzP/jggxMikYjjeV4gU5lYCCGE53lMSun+9a9/Pb2Fgw/Xa0S6det2Sbdu3TwpZTBz0yIiym5vEYvF6s8777w/h8Phuqac4/XXXz+Hc2517NiRcc79juMQ55w453rXTbOgoEA+9NBD1xNRkwIQY8zt3bt3KrPZmi9TjNaKRCJkmia5rrvDXmTuNe7o+9thCyHifr+/Te0WKoRwDcNwPM8zhWhYf6qU4q7rWqgKn18wBAct5sYbb7wjFotxpZTNGPMyN2RFRJxzLizL4rZtFz799NOjWqoNemfNOXPmnBGLxSKu6/qFEOR5HlmWRYZhUOYm5sTjcbrzzjtva2om1cyZM8eGQiFHKWV4nkeGYZBhGLpKOUkpKRAI8C+//PKQNWvW9GrqNaiGMSWVuwsu55xyA53+0NXR9ce2vt74MTv44J7nmT6fr00V7lRKKdd1DaKGwKq3WhBCUDqd9re1IUPYPgQgaDGDBw9e1rNnz9WJRMJPRDwzN2IQEc/0Oszi4mL18MMPT2jJdiilxPTp0ycVFxe7QghuGAZZlpUNDrZtk+M47lFHHfVh586dNzfl2KtWreqxePHiI4QQAcYY0/vNuK5LUkry+/2k96kJBoPWrbfeOqWp7c8ETD8RbbUNh97YLfdjVzTh5w3GGHNdt82VuZFSMiGEoytrZ54Ljvmf/IIABC1GKcWuvvrqx2zb5kTUsJlRBudcf/atX7/+gMWLFx/RUu1Yu3Ztl+XLlw+yLEuYpknJZHKrnoBhGFRbW2tOnDhxCmOsScNN99133+2RSMQ1DMMyDINct6HzlJmjINu2s+exLMuaP3/+yU1NSMjcbL3Mv7NBSO/wuS2Ne0L6o6mEEF6m19pmKKUU51wxxpRSiunn1/M8bllWmxouhB3DHBC0mMw70Sc6dOgwxfM8H+dcep4ndPCRUpIQggKBgHzkkUfGEdGFzd0GpRQfP378hHA4nJJSBpVS5PP5yLZtMgyDpJSUSqVk586dV5944onvNPHYomPHjqeHQqHsTrVCCHJdlwzDIKWUngMifV7TNM277777JiK6vQmnYkSUUkr5lVLC8zzFOfdysuBU5kMSkWCMie31bnK+LjPH3VbygSQij4ik4zi7nb3XUkRD7jV5nmdyzrNbcQshPMdxTKLs5o1tKnDCjyEAQYu7+OKL//jSSy/9JhwO20IIK3PjVIwxTkRUWFjI5syZc7pSymxqD2RnGGNyv/32uyAcDnPDMISUMrtLph6Gqq+vl7feeuv0UaOaNhX1yCOPjJFSBn0+H7mum+3VGYZBei6IqCHQGoZBjuNQQUGBf9asWVdREwJQbW1tQSKRYD6fr14pRZ7nccMwXCklp0wQ4Zwr13V5MBi0/X6/zzCMkA6CSinSN+rMLqHRVCpFtm0bnPPtd6OIeDQa5bW1tQVNemL2EsaY1MObRKSvU2a+h+CTBzAEBy1u3LhxU9LptOs4jquUck3TTDqOQ0II5bouKaWCPp9PzZgx47rmnEBWSvEXXnhhpJQywBgzXdfljLFsgoDe3lwIUfeb3/zmuSYem/3+978fGw6Hmed5PiEEcc7JdV3yPE9JKV0d7EzTJNu2yTRNMk2TEolE0SuvvHL+rp6roqKiUywWK6isrCyrrq4urq2tLcr8u6SmpqaopqYmUllZWRKNRsObNm0qKy4u/o7oh+E6HYSEEJRMJpPPPvvsiC1bthRFo9FQTU1NeAcfISmlGDFixGtNfe5bg9petw/aLAQgaFFKKd6tW7eNP/3pT5c4jkOGYSQcxzEMw3Bd1yWfz0dERH6/35o1a9aVzfnOlTEmZ8yYcX1BQQHjnPt0r8fzvOxQVG1tLV1xxRVPMsa8nRxuq2v65z//eXxVVVVHwzAsIsoOs2V6OsmePXsuraurk3oITveAGGNUXFxsTZ069ebduB4v81lnxamc70k9JOe6Ls9ZH5Ntl23bOhDuclabziJsw1Sjz5BHEICgRekb2I033nhPNBo1lFIeY8zzPI+bpmnriXSfz2du2rSp8z//+c9j9/Sc+ka8dOnSAV9//XW/wsJC6Xkey52M9zyPPM8jKWVs/PjxTcpMY4zJe+6553+DwSDXN3nd03AchxKJRHr+/PlHWpZV4TiODhrZn7Esi7766qu+y5Yt+0lzVjPQQcjzPNMwDOV5Xva8tnacp9MAAB+sSURBVG2TZVn62vdqBYoWglTrdgABCFqcUkqceOKJb++3334bk8mkqZSSnHPXcRyulNLvsFlJSYl733333doMp2RERA8//PCN4XDYdRynUPdEdOKDEIJSqZQ6/vjj/1lSUhLd1esgItq0aVP5xx9/PDgUCnm6d5HJwiLHceRZZ501RynFhw8f/moymVS615WbfFFaWiqmTp16e3P2MDIT7zIT1LNJh6ZpZoOk4zhiJ/M+AHsNAhDsDZKI6KqrrpqVSCSEECJFRJ4QwuGc25kgJIPBoFi0aNHPvv/++/325GSZygfBefPmnerz+SydnaZl5p2otrbWuemmm24j+vHmZts7LhHR7373u99FIhHXcRw/EWV7U4ZhUE1NjTdhwoR7GWNy/PjxU+PxOCOibIAiIj0XxOfPn//zTZs2le/JtTZqnyIisiwrnUqlyDRN8jwvm3SRTqcpEAjYUkreTrawbrwhHcMi1PyCAAQtTt8Yr7vuuseUUnYymRSc85TneZ7ruq5Sys5kbPn9fj977LHHrt3dG4ke0nrssccuJSKfaZqGaZrkOE52Ip6IKB6P04ABA5YcfvjhK3LbuAvHZy+99NJ5fr/fZ5pmNqU706OiPn36fNG7d+8viYi6dOmyfuDAgYscx3F1zyt3bVAwGOSzZs26rjmH4ZRSzHEcK7ddRA0B0DRNSqfTJmPMa8qcVxuWm0a+rZRyaOMQgGCvYYzFTz311L9lFmtKzrltGEZSCJFyG74oI5GIeuKJJ0bvbjKCHtKaNm3apEgkIvWwm16s6LquLpGTGjt27PSmHv/RRx+9hnNuGYZhSikpkUhQMBjU6dze2LFjZ+RUrWY33HDD76qqqrhOBtBzMpZlkc/nCz711FOXNfdEf6ZOWnYNkp7zygRg5Xlee1l+0TjgIADlGQQg2KtuuOGGe2KxmJBSKiJSUkrleZ7knKellFIIwdLpdOCVV145d3eOr5Ri//73v4fV1dWVcc5/dKPV9dmKi4vXn3feea829dizZs26KhgMZrcoyF1fY5pmzciRI/+Qe7qTTjrp7ZKSkg26QoJug547SqfThc8+++z/7M61bgtjTHmeJ/Q5ckv35PxMe50DQgDKMwhAsFcdcsghn/fs2XN1PB43iUgvJPQywcdhjMmCgoLdrg/HGFMPPvjgpIKCAhJCZFfK6zU/mQCUGDVq1FO7ekw9X/LOO+8MW79+/UGWZZm6hI++sSeTSTr//PNfzlTfVkopgzEmGWNyzJgxDycSCVsHP855dl1QYWFhIFMle69pa6V19sCPAk5uuSdo+xCAYK8bP378/el0WmRWrishhFRKqcxaGhEIBNjSpUv7r169umdTj11bW1v8zjvvDPP7/VxKyfXci16L43ke2bbtTJo0aZeH3/R8yYMPPnhjYWGhUg37C5Ft20TUkNQQj8cTY8aMuZcy61EYY66e27nuuut+H4vFbCml7fP5spl4nueRaZr0zTff9Fi0aNHPmnqt8CMIPnkGAQj2KqWUuOiii/7EGEu5rsuklEI1bCamEwEEEZklJSWp6dOn39DUZISHHnporGVZpmEYVuPhJ9d1KRaL0XnnnTc7EyB26dhKKVZRUdFx4cKFx4ZCIZFTQUHvxukedthhy3v27Pld48Whmc/p4cOHz0mlUq7OhNNbJAghKBKJGFOnTr2lKdcJRIQ5oLyHAAR7myIiuvTSS/+QSCT8mQlyizKl/6WUjDEmfD6f8frrr5/dlGQEpZR49tlnfxMOh6WUkucuOs1ZkFk/ceLEu4h2PfONMaYeeuihsT6fj7uua+iq13ovocrKSj5u3Lj7d9Su66+/fkptba3u9WVrx2XmgqyFCxcOq62tLd7VawVoDxCAYG/jREQ33XTTvclkUlJDIU0hhDBysrNEJsvMeuaZZy7d2QF1T2bevHmnxmKxctM0DZ31pXsZRET19fV0xBFHfNCjR491TWmwUoo/9dRTl4XDYUMHDb0hXDqdpoKCgorhw4fP2d7jGWNe//79v+jXr9+ntm1nH697Q36/nyzL8t1xxx1NqZANP4YeUJ5BAIK9imV2Gw2Hw1XHHnvse/X19cHMAkLBGyKRrhrACgoKjBkzZkzY2VCZnvR/8MEHrw8EApyILF0cNFNuh5RSZNt24sYbb/xdU1O8M0GwwLIsoY9nmiYxxqi+vp5GjRr1TGbx6zZfTzohYezYsdPr6upSuipC7r4+JSUl/Pnnnx/ZnGuCANo6/LFDq7nhhhvuSSQSpJTyHMdhOoOJc+5JKQ2fz2d+++233T/77LPDdhaE1q1b1+GTTz45IhAIZFOvdeKBrtHWoUOHb4899tiFTWmjUorPnDlzTDAYDOQOm+k9aKSU0csvv3wm0fbTm3XQ/dWvfvXncDhcRUTZjet0kGSMCc65MWvWrMub0r7dgF4CtBkIQNBqhgwZ8n6XLl3WZkrFKNVQzEwSkZRSMs65EYlE6O67775tZ72W6dOn3xwMBrkQgut065ybO9XV1bnjx49v8sLTJUuW/GTNmjUHW1bDvmy5JX3S6TQdccQRi7t27fr99h7fOHBecMEFs5PJZLZAaW6ZoFAoFHr44YfHoZwM7CsQgKBVXX755U/W19ebsoFSqmG7ZaKG3kcoFKI5c+b8Yke1y5RS4pVXXjmvsLCQMls+6CG3bAq2aZrVo0aNerqp7Zs2bdqtkUgkGyR0L8hxHEqlUslx48bdn1vWpvEQmg6cSimulGI333zz3clkslZn0ukyQZl9inhFRUWXBQsW/Lyp7QTIRwhA0KrGjBnzoFIqJqX0LMuyXdfVN2YvU0YnEA6HvQceeGBc48fqnsLzzz9/iW3bEaWUXxfgJCLy+XzkeR5Fo1HvN7/5zTNNaZdSSlRVVYX//ve/n+L3+7kOEjoQKaUoEAhUnXjiiQtyH7ejKgOMMRUOh6uGDRu2WAcyHSQZY2SaJgWDwYJ77rnnVvSCdkl7WVC7z0IAyi/t8qZ0zjnnzE0mk8zzPCmEkEIIZds2z9zsWTgcNmfOnDmm8eN07+LRRx+9NhKJyMx2BNmKB5ndScl13djdd999Z1PaxBjzHn744Yl+v59xzg0dJPTWCslk0r3qqqse0/M7RERKqaAQwgkGg7FIJFITDoejoVCoPhwO10cikfqSkpK64uLimqVLlx5jmmZ2LZEeKrRtm4LBIC1ZsuQn69at67Snz+s+AAEozyEAQau74YYb7kgmk9K2bUUN5XmY53ksE4yIMeavq6srXbBgwQmNH/v555/3+/LLLw8hokDu+hyd+ZZOp+mkk076BxGlmtquWbNmXREKhRgRZY+pJZPJ2JVXXvkY0Q/Dbo888siosrIyp1u3bqxjx46hzp07F3bt2jXUqVOn0P777+8vLy8P7rfffgXBYDCkj6PbqXtXnHMKh8OBO++8cwp6QU2GgJRnEICg1R144IHrDznkkOVSSpdz7hERM02TpdPpbEJBIBDwTZs27ZbGcywPPPDAxEAgYPh8PpW7DTVRw747dXV16TvuuOPWpqZe//nPf/6VlLJQCGHp/X6IGobekskkHXvsse8XFRXV6E3giIhmzpz524KCAp8QIiilNDLp5XpbbK6UElJKU/ek9HBebuFQpRQVFBSYr7/++pl7/sxuU3sKagg4eQ4BCFodY8ybMGHCfYlEwkyn04aUUhAR1zt5ZvbOEZ988snhFRUV2Q3clFLitddeG15UVGSn02mWu8DTMAyqq6ujfv36Le/du/eqprbp/vvvnxgKhQzDMJgOakIIsm2bbNtOjhs37t5M2xVRw/bfmzZt6h4IBHg6nSbLsrK9G13/zTAMsiwruzWCztDTG8bp4UPXdcmyLGPatGmTmu1Jbp8QgPIcAhC0CWedddYcy7LqGGOe3rpaL9jUvSDDMHwzZszIVo5+7LHHrjRN009ElmVZW/V+pJQUj8e9m2+++a6mbj/w+eefH7Jq1aqfWpYlctf+6CAUCoUqhg0b9l7uY2bMmHFjOBz2XNfNZrZxzkkIQclkkvScTyqV0teSXYiau1Yps1sq+f3+0FNPPXXFnj2r7R4CUJ5DAII247LLLnsqHo8beq5F92Z0QCooKGAvvvjiSKKGDLiZM2eOCYVCihrqyGV7HEIIchyHysrKvjn99NPn7er59ZzLlClT/jcSiXiMMa4DoA5C9fX17pVXXvlY46A2Z86cM0zT3KodRJRd56O3Ac8pYEpEtNXP5pbn8fl8VFVV1XHOnDmn78FTui3taQiOCEEoryEAQZtx2223TbNtOy2ldPWNXG+hkNlS2kokEmV//etff7lq1ao+69ev72KaJiciSqVS5PP5sjf3aDRKV1999cymnD9T0sf/1ltv/dKyLKPxXI3neZRKpZITJky4j6hhCFApxaZMmTI5Go0G6+rqYlu2bKn//vvv7erq6tTGjRvdioqKVEVFRbLRR6qioiJRUVERTyQS9XpbB10wVQerwsLC4L333nuzUspq4nW0tyCzPYoQgPJae9maF/JcZjI/8atf/ertDz744DQpZXa+JGdojUUiEefJJ58cV1ZWtikSiTDOuamHtFKpFPn9fkqlUsQ5r77uuutmNLUdd9xxx02WZRl6DifTNpJSUiwWozPPPPPNhi8plrMAdYpS6l5q6F0oxpjM7Bnkbec0WbNmzbrg2muvfcHn82V7fnp4zu/301dffXXIqlWrehDRV029lu3xPG9fCVDQxqEHBG2Cnsy//vrr76msrDQCgYCdOwekb86WZQW/+OKLn7399ttnFRQUBPRkvt4awbZtisVi8oILLnhpd9rx/PPP/79QKCT0ufXwH+eckslk+rrrrruPMaYaZ9Vldj/1cvYA2mnwISI6//zzXxJCVOtryO28KKXI7/cX3n777XftzrVsR3sPPu39+toVBCBoUwYPHrysT58+X8ZiMUMPfeVu3paZjwn6/f7C3E3hdHHPzDyNPXny5Nuaeu45c+acVVNT00UIIXSdNh3gEokEHXjggV8NHDhwSXNer1KKX3HFFU/V1dV5erhPD8Fl0s/p73//+4lKKX9znredQvDJMwhA0OaMHTt2RiwWU0Q/ZMLpgKB7CXrYTWeb6Z+xbZuOPvroRZ07d65syjmVUmz69OmTIpGI0otZde/LNE1KpVLO6NGjn2jua2WMyXHjxt2fSqXSjuPoDeqyASiTFWfdeeedNzbXKZvpOAB7DAEI2pxf//rXLwghal3XtXWQIaLsFgh6WMy27WxA0t+LRqPu7bfffnNTzqeU4v/9738PWrZs2WDDMIRlWdlz6qQA27ZTV1555aPNfKlERFRUVFRzwgknvJ1Op7Pn1EOOnudRQUFB8Kmnnrpct7Ul2tBOILjmGfwxQ5vDGPMuvvjiF+PxeDYFmoiyWW56bY4eotPrZxzHof333//rn/3sZx/t6rl0JYMpU6bcEolEXJ0KnVurrb6+nkaMGDG7Za62wXXXXfdAPB53dSDV1yaEIMMwKJFIFL/00kvnN3VN07YIIdpT5hiCTh5DAII2afLkyVMTiYRLRNm5H9u2t6pIrW/WugZcNBqlG264YUpTzqOTCV5++eVz/X6/oYOdHtrLpF7b119//X3Ne4VbGzp06MJOnTp97Xme0uuCNM45FRQUBB544IFJSim2KzXidDKD7sHpIUopJf/RCfJX4+cBwSjPIADll33mBVZeXr5pyJAh78diMXJdlxhjlJsarff90RvPpdNpKiws3HDJJZf8X1PPde+9994QDAaZYRhGbkYdUcOmcz169Piid+/eXzfvFW6NMaauvPLKR6urq5VpmkT0Q4DNZMPRypUr+y5ZsuSnO6trpxpk/5+7hQTnXO1ob6U8xBr9e595jbQHCEDQZv32t7+dkU6ns9sd6NppSqmtgpGUkhKJhLr00kufJvrxLqTbkvszTzzxxJWBQMCni4fqmz4RUSKRkGPHjp2Ru+1Cc1NKGUREv/3tb3/POY86jqN0XTtdIdswDAqHw9a99957+86OZ1mWo58rPZyoKywQkeKc7/EwHkBzQACCNkkpZf3iF794MxKJbPQ8T+l6cLpoZzqdzi4Q9TxPeZ5Xf/XVV99H9MOw2o7on5k/f/5JtbW1pZZlMV15QWegZW7idSNHjnyxJa+VMebqgHj22Wf/pb6+3s48B9k5L8dxyO/3q3/84x/H1dbWFu/oeI7jCJ0ZqHdvzSkpZLuu2556QLnQ+8kzCEDQJjHGbCKi0aNHP5pIJBzGmLRtO3tD9vv92Z5QMpm0Tz755PkdOnSI7cqxc3s/999//03BYNDSAUcHukwxU2f48OGv7Oqi0j2hA+LkyZNvTyQS0vM8lVuFW6eFW5bFp02bdsPOjieldHUmn57LYow5qVQqIIRosd7cXoaAk+fwC8wjAwYMWB2LxQ7ScwTapk2baMWKFT26d+++tpWa1iIycxWG3++v8/v9wjAMVynFMhPpjHPuua4rksmkXLZs2YDDDjvsy6Ycf8WKFYcOGDDgP4WFhWnLslwppUlEjHPuSilZfX298emnnx7at2/fJm/nsLuUUnzgwIEfr1y5sr9lWS4RcZ2pJ4RwUqmUlU6nmW3bwW0FRqUU79q163/r6+vLhRDKdV2LiMgwDIdzLquqqkLz5s077bTTTntrb11Tc/v222979O/ff02nTp1SRJRdoOs4DoVCoVUrVqzo04rNgyZALThoszI3WE8pFWKMOUTZtGldi01lvuZnjDV5x9P+/ft/oZTyEVG2hI6W6SUZ+rx7S6Ydg4iI4vE4KaV4pracHq1QRGRur1eW+dleROQSEWeMeTnHEJmvObnPH0BrQQCCNi83COibZu7Nc3eCT+Zxkoi2OSGfOf5eDT7baYfM/UxEpJTaYbtyni+v0TG8nK+1h+CzrREcjOrkEcwBAeSZdhI8ABCAACBvobeT5xCAACBfIQDlOQQgAMhXCEB5DgEIAPIVAlCeQwACgHyF+1eewy8QAPLVtnpAyBDMIwhAAADQKhCA8kjOyn/9/+ymaY7j4HcJ+wTHcbjeI2pbdqUaOrQNuGnlAf2CklJyxhjpD12o0rZtakcFJgF2SAjhZv7ms68FHYxQYii/IADlEcaY1NWadS9Il+z3+XzY4wX2CT6fT+q/e6LsRnt6Gw28DvIIAlAe0O/oDMNw9F41OhBlvk51dXWBVm0kwF5SV1cXMIyGMpZ6TyghBCmlyDAMjATkEQSgPOL3+9NElN0wjYiyW1LHYrGiVm0cwF4Si8WKOOdbvQb0a8KyrN0qTAutAwEoD+g5oJKSklr9jk/vcEnUsOHY5s2bO7dqIwH2kvXr13fmnGfneTjn5LoueZ5HZWVl1a3ZNmgaBKD8wImIDjrooC9t2/b0Oz8iIikl+Xw+WrJkyaBWax3AXrR8+fLBPp8vN/GAGGPkOI7q1avXyszXcG/LA/gl5QdJRNSzZ8+Vtm1zIQR5nkd6GMKyLFq2bNlRrd1IgL1h2bJlR1iWxfQbMaUUmaZJjuNQjx49Vmd+DJlweQABKA/oJIRBgwZ9rJRSjuPkZv2QEIKWLFkyuLXbCbA3LFmyZLAQIvt/xhjZtk1SSho0aNDHma8hAOUBBKA8cuSRR36klErnpp1KKSkQCFAikSj4+OOPEYSgXfv4448HJxKJcDAYdHUqtn4tKKWSRx555Eet3UbYdQhAeaZXr14rHcch13WzQ3Cu65Lf7xdPPPHEmNZuH0BLevrpp68OBoPStm1DBx/Xdcm2bbd3796ftXb7oGkQgPIIY0wNHz78Fdu2HcMwyHUbljwopaiwsJDmzZt3Zis3EaBF/eUvfxleUFDAGGOkXwOGYZBt297ZZ5/9Oobe8gsCUJ4ZOXLk/8XjcdfzPDJNM7sOSEpJjuMU3nXXXbe3dhsBWsKUKVNuVUqF9bIE13XJNE3yPI8SiQS75JJLXmztNkLToGhfHtF1ro4++ujF69evHxQIBLK1sBzHIcMwnMrKynRFRUUY7wShPVFK8fLy8trS0tJCz/PI5/MREZHneZRMJqlLly4fLFq0aEgrNxOaCD2gPKKDyoQJE6YmEgnP8zzyPI9c1yWfz0eO45iGYVgXX3zx7NZuK0Bz0L2dkSNHvuTz+QI66ca2bUqn07r340yYMGFaa7cVmg49oDzVp0+fb2zbPsCyLDJNk9LpdHYtRE1NjfPss8+ef8YZZ/yltdsJsKfmzp179qWXXvpacXExM02TbNsmv99PrutSOp0my7LWrFy58qDWbic0HXpAeUgpJaZNmzampqZGElG2NI/neWQYBoVCIXP06NHPbdiwoWtrtxVgT6xfv77LFVdc8UxBQQEzDIM8zyO9F5BSimpqauj+++8f19rthN2DHlCeUkrxIUOGfLxu3bqBBQUFxDnXXyfGGCWTSRJCbPz66697McYSrdxcgCZTSgUPOuiglZ7ndQ4EAjy3CK+UkhKJBHXp0uWj999/fwi2YchP6AHlKcaYnDNnzhnxeLxeSqk8zyMiym7TkFkf1OHggw/+oqamBpWyIa9UV1dHDj744C9c1+3EG2R7PZ7nkZSS4vF4/Zw5c85B8MlfCEB5rKysbMstt9xyZ3V1tdIvUL0q3OfzUTAYNFKp1P6HHnromiVLlgxs7fYC7IqPPvpo0GGHHbYymUweEAgEhGVZ2T1/9Bus6upquuWWW+4oKyuraO32wu5DAMpjjDH3+uuvv3/YsGF/ra2tzVYHzt011e/3G5ZlFZ988snvTp069RallNjJYQFahVKKT5ky5dZf/OIXCy3L2s/v9xNRQ603z/OyO6DW1dXRsGHD5owfP346Y8xrzTbDnsEcUDuglBKDBg36pLKy8lDLsgzGWDYjTi9UdRyHotGoOuCAAz7//e9/f9lRRx21hDGG3SOh1SmljE8++eTwa6655sm1a9f2j0QiZJpmdshNVzxQSpHjOHZZWdnnixcvHozgk//QA2oHGGPeJ598MsSyrG/T6bQnhKBUKkWGYWR7QkIIKi4uZlVVVYecfPLJ7x1//PEL582bd7peZwGwtyml2FtvvXXacccdt/CEE074qLKy8pDi4mLSla51pfd0Oq0/K9M01y9evPhoBJ/2ATefdkQpFejXr9/yaDTaKxKJMD1u7rouCSFyKyZQIpFQsVjM8/v9dSeddNI/zjvvvD8OGzZsUWFhYTVjTOmqC619TZD/9N+SUorV1dUVv/vuuz+bPXv2yAULFpyUSqWKg8EgKygoIM/zmGEYJKUkKSXptGvOOUWjURWJRL7+4osvBjDGkq19TdA8EIDaoaFDh763atWqIYWFhUwHHqKGd5R6noiIskNztm07iURC2LbNAoFAsry8fEtxcXGtYRiulJJlHrvV34rSA/LNSAe8XemVtVRwbMkeYXsN6Dt7zpRSvKampmjLli3lyWTSZ5omBQIBZlmW8Pv9pPe30nOXuf92XZfq6+vd3r17f/Tuu+8es7euCfYOBKB2SCnFxowZM/P555+/rKSkxNRZRDo9Wxdw1D0jnT1H1FBbS0/4tkCMgX1M7vo0zjnlviHinJNt22Sa5lbzPHq9TyqVotraWu/Xv/714w899NC17TWA78sQgNqx+fPnn3TVVVc9G4/HO4VCIV5QUECpVCp7M9Ap21rui7/x9wB2R+6GcUS01UJSoh8ClG3bJIQgv99P9fX1lEqlXL/fv/nJJ5+89MQTT3y7dVoPLQ1JCO3YKaec8o81a9Z0vfjii2fW1tbWb968mYQQDuec9Fi7Hu7Q80U6cUFnIAHsCZ0Eo/9NRNketmEY2QQZIQRxzr1NmzZRNBqNXXTRRTPXrl3bFcGnfUMPaB9RW1tbPHHixAdmz559vmEY/lAoRJZl8dwbgJQyO+mra8s1mvoBaBL996X/thr/rSmlyLZtSiaTtuM49ogRI16eOnXq+JKSkmhrtx1aHu4u+xillJg5c+Y1zz333KhVq1b1DQaDUgghLMvimQ3uuN7qG/NAsKf0EJz+d2YtD6VSKV3N2unZs+eXo0aNevzqq69+HOnV+xYEoH3Yxo0by95+++3TFy5cePyiRYuGVFZWdpBSmrZtB/QQyV7sAW0r0u1K9GO7+HP7gm39slr1Na5T/4mIDMPwhBCpsrKyiqFDh743bNiwt88666x54XC4qjXbCK0HAQi2WqcRjUaLNm/e3KGuri7seZ7VlHTrxqna0Ha1RBr9to7PGGOGYTiFhYXRTp06bYlEIrVYZwYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANAy/j8ajlPNh8esHQAAAABJRU5ErkJggg=="></image>
                                            </defs>
                                        </svg></div>
                                    <div class="description">Giá sản phẩm đã bao gồm VAT</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <p class="product__price">Giá sản phẩm:</p>
                        <p class="product__price--show"><?php echo number_format($row_chitiet['giasp'], 0, ',', '.') . 'đ' ?></p>
                    </div>

                    <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
                        <div class="box-order-button-container">
                            <div class="is-justify-content-space-between">
                                <button class="is-align-items-center">
                                    <span>MUA NGAY</span><br>
                                    <span>(Giao tận nơi hoặc lấy tại cửa hàng)</span>
                                </button>
                                <button class="add-to-cart-button" style="display: none;">
                                    <p><input class="inputnone" name="themgiohang"><img src="https://cdn2.cellphones.com.vn/50x,webp,q70/media/wysiwyg/add-to-cart.png" width="30"></input></p>
                                    <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm giỏ hàng"></p>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="itemtabletn_one">
                    <div class="tablebtn" id="id11">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="success">
                                    <th style="text-align: center;"><span style="font-size: small;"><strong>Loại sản phẩm</strong></span></th>
                                    <th style="text-align: center;"><span style="font-size: small;"><strong>Đổi mới miễn phí (*)</strong></span></th>
                                    <th style="text-align: center;"><span style="font-size: small;"><strong>Quy định nhập lại, trả lại</strong></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: left;"><span style="font-size: small;">Điện thoại/ Máy tính bảng/ Macbook/ Apple watch</span></td>
                                    <td style="text-align: center;"><span style="font-size: small;">30 ngày</span></td>
                                    <td style="text-align: left;"><span style="font-size: small;">- Trong 30 ngày đầu nhập lại máy, trừ phí 20% trên giá hiện tại (hoặc giá mua nếu giá mua thấp hơn giá hiện tại)</span><br><span style="font-size: small;">- Sau 30 ngày nhập lại máy theo giá thoả thuận</span></td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;"><span style="font-size: small;">Samsung Watch</span></td>
                                    <td style="text-align: center;"><span style="font-size: small;">30 ngày</span></td>
                                    <td style="text-align: left;"><span style="font-size: small;">- Trong 30 ngày đầu nhập lại máy, trừ phí 30% trên giá hiện tại (hoặc giá mua nếu giá mua thấp hơn giá hiện tại)</span><br><span style="font-size: small;">- Sau 30 ngày nhập lại máy theo giá thoả thuận</span></td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;"><span style="font-size: small;">Loa - Tai nghe cao cấp</span></td>
                                    <td style="text-align: center;"><span style="font-size: small;">30 ngày</span></td>
                                    <td style="text-align: left;">
                                        <p><span style="font-size: small;">- Trong 30 ngày đầu nhập lại máy, trừ phí 20% trên giá hiện tại (hoặc giá mua nếu giá mua thấp hơn giá hiện tại)</span></p>
                                        <p><span style="font-size: small;"></span><span style="font-size: small;">- Sau 30 ngày: Nhập lại theo thoả thuận (mức trừ phí nhập lại tối thiểu là 30% theo giá mua ban đầu)</span></p>
                                        <p><span style="font-size: small;"><span><span><span></span></span></span></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;"><span style="font-size: small;">Phụ kiện &lt; 1 triệu</span></td>
                                    <td style="text-align: center;"><span style="font-size: small;">1 năm(Sản phẩm mua mới)</span><br><span style="font-size: small;">1 tháng(Sản phẩm mua cũ)</span></td>
                                    <td style="text-align: left;"><span style="font-size: small;">Không áp dụng nhập lại</span></td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;"><span style="font-size: small;">Phụ kiện &gt; 1 triệu</span></td>
                                    <td style="text-align: center;"><span style="font-size: small;">15 ngày</span></td>
                                    <td style="text-align: left;">
                                        <p><span style="font-size: small;">Không áp dụng nhập lại.</span><br><span style="font-size: small;">Riêng Airpod:</span><br><span style="font-size: small;">- Trong 15 ngày đầu nhập lại máy, trừ phí 20% trên giá hiện tại (hoặc giá mua nếu giá mua thấp hơn giá hiện tại)</span><br><span style="font-size: small;">- Sau 15 ngày nhập lại máy theo giá thoả thuận</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;"><span style="font-size: small;">Hàng cũ</span></td>
                                    <td style="text-align: center;"><span style="font-size: small;">30 ngày</span></td>
                                    <td style="text-align: left;">
                                        <p><span style="font-size: small;">- Trong 30 ngày đầu nhập lại máy, trừ phí 15% trên giá hiện tại(hoặc giá mua nếu giá mua thấp hơn giá hiện tại)</span><br><span style="font-size: small;">- Sau 30 ngày nhập lại máy theo giá thoả thuận</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;"><span style="font-size: small;">Bảo hành mở rộng</span></td>
                                    <td style="text-align: center;"><span style="font-size: small;">15 ngày</span></td>
                                    <td style="text-align: left;"><span style="font-size: small;">Trong 7 ngày đầu, máy không lỗi, khách hàng trả lại gói BHMR</span><br><span style="font-size: small;">&gt; Nhập lại trừ phí 50% gói BHMR</span></td>
                                </tr>
                            </tbody>
                            <div class="more-infomation">
                                <span class="tablebtn__close" onclick="document.getElementById('id11').style.display='none'"><i class="fas fa-times-circle"></i></span>
                            </div>
                        </table>
                    </div>
                </div>

                <div class="supprot_new">
                    <div class="online_support">
                        <h2 class="title">CHÚNG TÔI LUÔN SẴN SÀNG<br>ĐỂ GIÚP ĐỠ BẠN</h2>
                        <img src="img/supprot/support_online.jpg">
                        <h3 class="sub_title">Để được hỗ trợ tốt nhất. Hãy gọi</h3>
                        <div class="phone">
                            <a href="tel:18006750" title="0348034110">0348034110</a>
                        </div>
                        <div class="or"><span>HOẶC</span></div>
                        <h3 class="title">Chat hỗ trợ trực tuyến</h3>
                        <h3 class="sub_title">Chúng tôi luôn trực tuyến 24/7.</h3>
                    </div>
                </div>
            </section>
            <section class="infomation-detail">
                <div class="infomationone">
                    <div class="tab-description">
                        <div class="tab-header">
                            <ul class="nav nav-tabs nav-tab-custom">
                                <p class="itemdescription">Mô tả</p>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div id="description" class="tab-pane fade in">
                                <div class="content-description">
                                    <p>Màn hình tràn viền không khuyết điểm</p>
                                    <p class="itembtnitem">Không “tai thỏ”, không “nốt ruồi” giúp cho OPPO F11 Pro 128GB khác biệt hoàn toàn với nhiều smartphone trên thị trường hiện nay.</p>
                                    <a href=""><img class="imgbtnitem" src="./img/phone/1.jpg" alt=""></a>
                                    <div id="contentbtnitem" style="display: none;">
                                        <p class="itembtnitem">Camera selfie nằm ẩn bên trong cơ chế trượt, từ đó chúng ta có một màn hình tràn viền cực kỳ ấn tượng giúp người dùng có một diện tích trải nghiệm tuyệt vời.</p>
                                        <a href=""><img class="imgbtnitem" src="./img/phone/2.jpg" alt=""></a>
                                        <p class="itembtnitem">OPPO F11 Pro 128GB được trang bị màn hình 6.5 inch, độ phân giải Full HD+, tỉ lệ 19.5:9, cộng với viền mỏng, nó giúp chiếc máy dễ dàng nằm gọn trong lòng bàn tay người dùng.</p>
                                        <a href=""><img class="imgbtnitem" src="./img/phone/3.jpg" alt=""></a>
                                        <p class="itembtnitem">Không “tai thỏ”, không “nốt ruồi” giúp cho OPPO F11 Pro 128GB khác biệt hoàn toàn với nhiều smartphone trên thị trường hiện nay.</p>
                                        <a href=""><img class="imgbtnitem" src="./img/phone/4.jpg" alt=""></a>
                                        <p>Camera selfie trượt ấn tượng</p>
                                        <p class="itembtnitem">F11 Pro 128GB là máy sở hữu camera selfie 16 MP có cơ chế “ thò thụt” khá độc đáo và tiện lợi cho người dùng.</p>
                                        <a href=""><img class="imgbtnitem" src="./img/phone/5.jpg" alt=""></a>
                                        <p class="itembtnitem">OPPO gọi đây là cơ chế pop-up (bật lên), lúc nào cần thì camera sẽ tự động được bật lên và sẽ ẩn đi khi không sử dụng.</p>
                                        <a href=""><img class="imgbtnitem" src="./img/phone/6.jpg" alt=""></a>
                                        <p class="itembtnitem">Camera selfie được đặt tại vị trí chính giữa giúp các bức ảnh selfie dễ canh hình hơn, không bị lệch và bạn chỉ cần mất vài giây để bật camera lên để tự sướng thôi.</p>
                                        <p class="itembtnitem">Không chỉ thế, camera selfie hỗ trợ trí tuệ nhân tạo AI với công nghệ Beautification được OPPO đánh giá cao, cho phép mang đến những bức ảnh selfie tốt nhất.</p>
                                        <a href=""><img class="imgbtnitem" src="./img/phone/7.jpg" alt=""></a>
                                        <input type="button" class="buttonbtnitem" id="btn5" value="Thu Gọn" />
                                    </div>
                                </div>
                                <input type="button" class=" buttonbtnitem" id="btn6" value="Xem thêm" />
                            </div>
                            <script language="javascript">
                                document.getElementById("btn5").onclick = function() {
                                    document.getElementById("contentbtnitem").style.display = 'none';
                                };
                                document.getElementById("btn6").onclick = function() {
                                    document.getElementById("contentbtnitem").style.display = 'block';
                                };
                            </script>
                        </div>
                    </div>
                </div>
                <div class="infomationtwo">
                    <div class="infomation-header">
                        <h2 class="title">Thông Số Kỹ Thuật</h2>
                    </div>
                    <div class="infomation-content">
                        <ul>
                            <li><label>Màn Hình:</label>OLED6.1"Super Retina XDR</li>
                            <li><label>Camera Trước:</label>12 MP</li>
                            <li><label>Camera Sau:</label>3 camera 12 MP</li>
                            <li><label>Ram:</label>6 GB</li>
                            <li><label>Bộ Nhớ Trong:</label>128 GB</li>
                            <li><label>CPU:</label>Apple A15 Bionic</li>
                            <li><label>GPU:</label>Tiêu Chuẩn</li>
                            <li><label>Dung Lượng Pin:</label>3095 mAh20 W</li>
                            <li><label>Hệ Điều Hành:</label>IOS</li>
                        </ul>
                    </div>
                    <div class="more-infomation">
                        <button onclick="document.getElementById('id08').style.display='flex'" class="w3-button w3-black"> Xem cấu hình chi tiết</button>
                    </div>

                    <!-- <button onclick="document.getElementById('id08').style.display='block'" class="w3-button w3-black">Open Modal</button> -->
                    <div id="id08" class="w3-modal" style="display: none;">
                        <div class="w3-modal-content">
                            <div class="login-from-content-item">
                                <span class="closeloginbtn" onclick="document.getElementById('id08').style.display='none'"><i class="fas fa-times-circle"></i></span>
                                <div class="login-btn-item login-item-one">
                                    <h4>Thông số kĩ thuật</h4>
                                </div>
                                <div class="parameter-all" style="box-sizing: border-box; margin: 0px; padding: 0px;">
                                    <div class="parameter-item" style="box-sizing: border-box; margin: 0px; padding: 0px 30px;">
                                        <p class="parameter-ttl" style="box-sizing: border-box; margin: 0px; padding: 10px; margin-block: 0px; text-rendering: geometricprecision; background-color: #f1f1f1; font-size: 16px; font-weight: bold;" data-group-id="29" data-index="1">Màn hình</p>
                                        <ul class="ulist" style="box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;">
                                            <li style="box-sizing: border-box; margin: 0px; padding: 10px; border-bottom: 1px solid #f1f1f1; display: flex;" data-id="6459" data-group-id="29" data-index="1">
                                                <div class="ctLeft" style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: bold; line-height: 21px; width: 186px;">
                                                    <p style="box-sizing: border-box; margin: 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision;">Công nghệ màn hình:</p>
                                                </div>
                                                <div class="ctRight" style="box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 10px; line-height: 21px; width: 434px;"><a class="" style="box-sizing: border-box; margin: 0px; padding: 0px; text-decoration-line: none; transition: all 0.2s ease 0s; color: #4a90e2;" href="https://www.thegioididong.com/hoi-dap/man-hinh-oled-la-gi-905762" target="_blank" rel="noopener">OLED</a></div>
                                            </li>
                                            <li style="box-sizing: border-box; margin: 0px; padding: 10px; border-bottom: 1px solid #f1f1f1; display: flex;" data-id="78" data-group-id="29" data-index="2">
                                                <div class="ctLeft" style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: bold; line-height: 21px; width: 186px;">
                                                    <p style="box-sizing: border-box; margin: 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision;">Độ phân giải:</p>
                                                </div>
                                                <div class="ctRight" style="box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 10px; line-height: 21px; width: 434px;"><span class="" style="box-sizing: border-box; margin: 0px; padding: 0px;">1170 x 2532 Pixels</span></div>
                                            </li>
                                            <li style="box-sizing: border-box; margin: 0px; padding: 10px; border-bottom: 1px solid #f1f1f1; display: flex;" data-id="27278" data-group-id="29" data-index="3">
                                                <div class="ctLeft" style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: bold; line-height: 21px; width: 186px;">
                                                    <p style="box-sizing: border-box; margin: 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision;">Màn hình rộng:</p>
                                                </div>
                                                <div class="ctRight" style="box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 10px; line-height: 21px; width: 434px;"><span class="" style="box-sizing: border-box; margin: 0px; padding: 0px;">6.1" - Tần số quét 120 Hz</span></div>
                                            </li>
                                            <li style="box-sizing: border-box; margin: 0px; padding: 10px; border-bottom: 1px solid #f1f1f1; display: flex;" data-id="27392" data-group-id="29" data-index="6">
                                                <div class="ctLeft" style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: bold; line-height: 21px; width: 186px;">
                                                    <p style="box-sizing: border-box; margin: 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision;">Độ sáng tối đa:</p>
                                                </div>
                                                <div class="ctRight" style="box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 10px; line-height: 21px; width: 434px;"><span class="" style="box-sizing: border-box; margin: 0px; padding: 0px;">1200 nits</span></div>
                                            </li>
                                            <li style="box-sizing: border-box; margin: 0px; padding: 10px; border-bottom: none; display: flex;" data-id="7799" data-group-id="29" data-index="7">
                                                <div class="ctLeft" style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: bold; line-height: 21px; width: 186px;">
                                                    <p style="box-sizing: border-box; margin: 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision;">Mặt kính cảm ứng:</p>
                                                </div>
                                                <div class="ctRight" style="box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 10px; line-height: 21px; width: 434px;"><a class="" style="box-sizing: border-box; margin: 0px; padding: 0px; text-decoration-line: none; transition: all 0.2s ease 0s; color: #4a90e2;" href="https://www.thegioididong.com/hoi-dap/mat-kinh-ceramic-shield-tren-iphone-12-la-gi-co-xin-so-nhu-1298900" target="_blank" rel="noopener">Kính cường lực Ceramic Shield</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="parameter-item" style="box-sizing: border-box; margin: 0px; padding: 0px 30px;">
                                        <p class="parameter-ttl" style="box-sizing: border-box; margin: 0px; padding: 10px; margin-block: 0px; text-rendering: geometricprecision; background-color: #f1f1f1; font-size: 16px; font-weight: bold;" data-group-id="1841" data-index="2">Camera sau</p>
                                        <ul class="ulist" style="box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;">
                                            <li style="box-sizing: border-box; margin: 0px; padding: 10px; border-bottom: 1px solid #f1f1f1; display: flex;" data-id="27" data-group-id="1841" data-index="1">
                                                <div class="ctLeft" style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: bold; line-height: 21px; width: 186px;"><a style="box-sizing: border-box; margin: 0px; padding: 0px; text-decoration-line: none; transition: all 0.2s ease 0s; color: #4a90e2;" href="https://www.thegioididong.com/hoi-dap/do-phan-giai-camera-tren-smartphone-la-gi-1339722">Độ phân giải:</a></div>
                                                <div class="ctRight" style="box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 10px; line-height: 21px; width: 434px;"><span class="" style="box-sizing: border-box; margin: 0px; padding: 0px;">3 camera 12 MP</span></div>
                                            </li>
                                            <li style="box-sizing: border-box; margin: 0px; padding: 10px; border-bottom: 1px solid #f1f1f1; display: flex;" data-id="31" data-group-id="1841" data-index="2">
                                                <div class="ctLeft" style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: bold; line-height: 21px; width: 186px;">
                                                    <p style="box-sizing: border-box; margin: 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision;">Quay phim:</p>
                                                </div>
                                                <div class="ctRight" style="box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 10px; line-height: 21px; width: 434px;">
                                                    <p class="circle" style="box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 8px; margin-block: 0px; text-rendering: geometricprecision; position: relative;"><a style="box-sizing: border-box; margin: 0px; padding: 0px; text-decoration-line: none; transition: all 0.2s ease 0s; color: #4a90e2;" href="https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#4k" target="_blank" rel="noopener">4K 2160p@24fps</a></p>
                                                    <p class="circle" style="box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 8px; margin-block: 0px; text-rendering: geometricprecision; position: relative;"><a style="box-sizing: border-box; margin: 0px; padding: 0px; text-decoration-line: none; transition: all 0.2s ease 0s; color: #4a90e2;" href="https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#4k" target="_blank" rel="noopener">4K 2160p@30fps</a></p>
                                                    <p class="circle" style="box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 8px; margin-block: 0px; text-rendering: geometricprecision; position: relative;"><a style="box-sizing: border-box; margin: 0px; padding: 0px; text-decoration-line: none; transition: all 0.2s ease 0s; color: #4a90e2;" href="https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#4k" target="_blank" rel="noopener">4K 2160p@60fps</a></p>
                                                    <p class="circle" style="box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 8px; margin-block: 0px; text-rendering: geometricprecision; position: relative;"><a style="box-sizing: border-box; margin: 0px; padding: 0px; text-decoration-line: none; transition: all 0.2s ease 0s; color: #4a90e2;" href="https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#fullhd" target="_blank" rel="noopener">FullHD 1080p@120fps</a></p>
                                                    <p class="circle" style="box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 8px; margin-block: 0px; text-rendering: geometricprecision; position: relative;"><a style="box-sizing: border-box; margin: 0px; padding: 0px; text-decoration-line: none; transition: all 0.2s ease 0s; color: #4a90e2;" href="https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#fullhd" target="_blank" rel="noopener">FullHD 1080p@240fps</a></p>
                                                    <p class="circle" style="box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 8px; margin-block: 0px; text-rendering: geometricprecision; position: relative;"><a style="box-sizing: border-box; margin: 0px; padding: 0px; text-decoration-line: none; transition: all 0.2s ease 0s; color: #4a90e2;" href="https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#fullhd" target="_blank" rel="noopener">FullHD 1080p@30fps</a></p>
                                                    <p class="circle" style="box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 8px; margin-block: 0px; text-rendering: geometricprecision; position: relative;"><a style="box-sizing: border-box; margin: 0px; padding: 0px; text-decoration-line: none; transition: all 0.2s ease 0s; color: #4a90e2;" href="https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#fullhd" target="_blank" rel="noopener">FullHD 1080p@60fps</a></p>
                                                    <p class="circle" style="box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 8px; margin-block: 0px; text-rendering: geometricprecision; position: relative;"><a style="box-sizing: border-box; margin: 0px; padding: 0px; text-decoration-line: none; transition: all 0.2s ease 0s; color: #4a90e2;" href="https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#hd" target="_blank" rel="noopener">HD 720p@30fps</a></p>
                                                </div>
                                            </li>
                                            <li style="box-sizing: border-box; margin: 0px; padding: 10px; border-bottom: 1px solid #f1f1f1; display: flex;" data-id="6460" data-group-id="1841" data-index="3">
                                                <div class="ctLeft" style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: bold; line-height: 21px; width: 186px;">
                                                    <p style="box-sizing: border-box; margin: 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision;">Đèn Flash:</p>
                                                </div>
                                                <div class="ctRight" style="box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 10px; line-height: 21px; width: 434px;"><a class="" style="box-sizing: border-box; margin: 0px; padding: 0px; text-decoration-line: none; transition: all 0.2s ease 0s; color: #4a90e2;" href="https://www.thegioididong.com/hoi-dap/tim-hieu-cac-loai-den-flash-tren-camera-dien-thoai-1143808" target="_blank" rel="noopener">Có</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php
}
?>
<footer>
    <div class="footer-middle">
        <div class="container">
            <div class="containerx">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-pad">
                                <h4>Phương thức thanh toán</h4>
                            </div>
                            <ul class="list-image">
                                <li><img class="img_pay" src="./img/thanhtoan/vnpay-logo.png" alt=""></li>
                                <li><img class="img_pay" src="./img/thanhtoan/zalopay-logo.png" alt=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-pad">
                            <h4>Chăm sóc khách hàng</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Gọi mua hàng 1800.2021 (7h30 - 20h00)</a></li>
                                <li><a href="#">Gọi khiếu nại 1800.1022 (8h00 - 21h30)</a></li>
                                <li><a href="#">Gọi bảo hành 1800.2063 (8h00 - 21h00)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-pad">
                            <h4>Tra cứu</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Mua hàng trả góp online</a></li>
                                <li><a href="#">Tra thông tin đơn hàng</a></li>
                                <li><a href="#">Tra thông tin bảo hành</a></li>
                                <li><a href="#">Tra cứu hóa đơn điện tử</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4>Liên hệ với chúng tôi</h4>
                        <ul class="social-network social-circle">
                            <li><a href="https://www.facebook.com/profile.php?id=100091170957186" class="icoLinkedin" title="Linkedin" style="margin-top: 10px;"><i class="fab fa-facebook-square"></i></i></a>
                            </li>
                        </ul>
                        <ul class="social-network social-circle">
                            <li><a href="https://www.facebook.com/profile.php?id=100091170957186" class="icoLinkedin" title="Linkedin" style="margin-top: 10px;"><i class="fab fa-facebook-square"></i></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="copy">
                        <p class="text-center">&copy; Bản quyền 2022 - Tên Công Ty. Đã đăng ký Bản quyền.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>