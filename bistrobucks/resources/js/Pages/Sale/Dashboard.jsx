import React from "react";

const Dashboard = (props) => {
    return (
        <>
            <h1 className="text-center">売上一覧</h1>
            <ul>
                {props.sales.map((sale) => (
                    <li key={sale.id}>
                        <div>
                            <div>ショップID:{sale.shop_id}</div>
                            <div>税金ID:{sale.tax_rate_id}</div>
                            <div>売上金額：{sale.total_sale_amount}</div>
                            <div>割引金額：{sale.discount_amount}</div>
                            <div>税金額：{sale.tax_amount}</div>
                            <div>来店人数：{sale.customer_amount}</div>
                            <div>新規顧客：{sale.new_customer_amount}</div>
                            <div>
                                リピート顧客：{sale.repeat_customer_amount}
                            </div>
                            <div>紹介顧客：{sale.referral_customer_amount}</div>
                            <div>支払い方法：{sale.payment_detail}</div>
                            <div>消費タイプ：{sale.consumption_type}</div>
                            <div>売上発生日：{sale.date}</div>
                        </div>
                        <br />
                        <br />
                    </li>
                ))}
            </ul>
            <br />
            <br />

            <h1 className="text-center">レシート</h1>
            <ul>
                {props.saleDetails.map((saleDetail) => (
                    <li key={saleDetail.id}>
                        <div>売上ID：{saleDetail.sale_id}</div>
                        <div>商品コード：{saleDetail.product_id}</div>
                        <div>数量：{saleDetail.quantity}</div>
                        <div>税込：{saleDetail.item_price}</div>
                        <div>税別：{saleDetail.item_price_excluding_tax}</div>
                        <div>合計金額：{saleDetail.sale_amount}</div>
                        <br />
                        <br />
                    </li>
                ))}
            </ul>
        </>
    );
};

export default Dashboard;
