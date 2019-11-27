<?php

?>
<div class="order">
    <div class="container is-fluid">
        <div class="row">
            <div class="col col-4">
                <input type="text" v-model="order.name" class="form-input" placeholder="Անուն Ազգանուն" />
            </div>
            <div class="col col-2">
                <div class="group-input">
                    <div class="icon-phone"></div>
                    <input type="text" v-model="order.phone" class="form-input" placeholder="Հեռախոս" />
                </div>
            </div>
            <div class="col col-2">
                <div class="group-input">
                    <div class="icon-email"></div>
                    <input type="text" v-model="order.email" class="form-input" placeholder="Էլ․ Փոստ" />
                </div>
            </div>
            <div class="col col-2">
                <div class="group-input">
                    <div class="icon-calendar"></div>
                    <flat-pickr v-model="order.apply_date" class="form-input" placeholder="Դիմելու ամսաթիվ"></flat-pickr>
                </div>
            </div>
            <div class="col col-2">
                <select v-model="order.status" class="form-input">
                    <option value disabled>Կարգավիճակ</option>
                    <option value="delivery">Առաքում</option>
                    <option value="waiting">Սպասում</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col col-2">
                <dropdown @select="select" v-model="order.brand" :items="brands" :placeholder="'Մեքենայի մակնիշ'"></dropdown>
            </div>
            <div class="col col-2">
                <dropdown @select="select" v-model="order.model" :items="models" :placeholder="'Մոդել'"></dropdown>
            </div>
            <div class="col col-1">
                <div class="group-input">
                    <div class="icon-calendar"></div>
                    <select v-model="order.year">
                        <option value v-for="(year, key) in years" :key="key">{{year}}</option>
                    </select>
                </div>
            </div>
            <div class="col col-1">
                <input type="text" v-model="order.vin" class="form-input" placeholder="VIN" />
            </div>
            <div class="col col-2">
                <input type="text" v-model="order.plate_number" class="form-input" placeholder="Պետ․ համարանիշ" />
            </div>
            <div class="col col-2">
                <button class="button">
                    Ներբեռնել
                    <span class="icon-download"></span>
                </button>
            </div>
            <div class="col col-2">
                <div class="group-input">
                    <div class="icon-calendar"></div>
                    <flat-pickr v-model="order.last_visit" class="form-input" placeholder="Հաջորդ այց"></flat-pickr>
                </div>
            </div>
        </div>
    </div>

    <div class="products-and-services">
        <div class="container is-fluid heading">
            <div class="row c-nb">
                <div class="col-9">
                    <div>Ապրանքների և ծառայությունների մատյան</div>
                </div>
                <div class="col-3 logs" :class="{active: show_logs}">
                    <span @click="show_logs=!show_logs">Կարգագրի փոփոխությունների մատյան</span>
                    <div class="log-list"></div>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="options-list">
                        <div class="section-title">
                            Ծառայություններ
                            <span class="icon-plus" @click="addService()"></span>
                        </div>
                        <div class="row list-item" v-for="(item, key) in order.services" :key="key">
                            <div class="col-2">
                                <dropdown @select="select" v-model="item.service" :items="our_services" :placeholder="'Ծառայություն'"></dropdown>
                            </div>
                            <div class="col-1">
                                <div class="group-input">
                                    <div>
                                        <span>Քանակ</span>
                                    </div>
                                    <input type="number" min="0" v-model="item.qty" class="form-input" />
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="group-input">
                                    <div>
                                        <span>Գին</span>
                                    </div>
                                    <input type="text" v-model="item.service.category_1" readonly class="form-input" placeholder="Գին" />
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="group-input">
                                    <div>
                                        <span>Գին</span>
                                    </div>
                                    <input type="text" :value="item.service.category_1*item.qty*item.qty||0" readonly class="form-input" placeholder="Ընդ․" />
                                </div>
                            </div>
                            <div class="col-2">
                                <select class="form-input" v-model="item.domkrat">
                                    <option value disabled>Դոմկրատ</option>
                                    <option :value="item.value" v-for="(item, key) in domkrats" :key="key">{{item.name}}</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <div class="group-input">
                                    <div class="icon-calendar"></div>
                                    <flat-pickr v-model="order.start_date" class="form-input" placeholder="Ամսաթիվ"></flat-pickr>
                                </div>
                            </div>
                            <div class="col-1">
                                <select v-model="item.status" class="form-input">
                                    <option value>Կատարում</option>
                                    <option value>Սպասում</option>
                                </select>
                            </div>
                            <div class="col-1 tc-ns">
                                <ul class="row-actions">
                                    <li>
                                        <span class="icon-delete" @click="removeService(key)"></span>
                                    </li>
                                    <li>
                                        <span class="item-status"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="options-list">
                        <div class="section-title">
                            Ապրանքներ
                            <span class="icon-plus" @click="addProduct()"></span>
                        </div>
                        <div class="row" v-for="(item, key) in order.products" :key="key">
                            <div class="col-2">
                                <dropdown @select="select" v-model="item.product" :items="our_products" :placeholder="'Ապրանք'"></dropdown>
                            </div>
                            <div class="col-2">
                                <div class="group-input">
                                    <div>
                                        <span>Քանակ</span>
                                    </div>
                                    <input type="number" min="0" v-model="item.qty" class="form-input" />
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="group-input">
                                    <div>
                                        <span>Գին</span>
                                    </div>
                                    <input type="text" v-model="item.product.category_1" readonly class="form-input" />
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="group-input">
                                    <div>
                                        <span>Ընդ․</span>
                                    </div>
                                    <input type="text" readonly :value="item.product.category_1*item.qty||0" class="form-input" placeholder="Ընդ․" />
                                </div>
                            </div>
                            <div class="col-2">
                                <select class="form-input" name id>
                                    <option value>Առկա է</option>
                                    <option value>Խանութ</option>
                                    <option value>Մատակարար</option>
                                    <option value>Գնումներ</option>
                                    <option value>Դրամարկղ</option>
                                </select>
                            </div>
                            <div class="col-1">
                                <ul class="radio-status">
                                    <li class="error"></li>
                                    <li class="error"></li>
                                    <li class="success"></li>
                                    <li class="wrong"></li>
                                </ul>
                            </div>
                            <div class="col-1 tc-ns">
                                <ul class="row-actions">
                                    <li>
                                        <span class="icon-delete" @click="removeProduct(key)"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="buttons">
                        <button type="button" class="button" @click="saveOrder()">Պահպանել</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style lang="scss">
    .products-and-services {
        margin-top: 30px;
    }

    .products-and-services .heading {
        padding: 0 15px;
        color: #fff;
    }

    .products-and-services .heading .col-9 {
        background: #a80181;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .products-and-services .options-list {
        margin-top: 15px;
    }

    .products-and-services .options-list .section-title {
        margin-bottom: 15px;
    }

    .products-and-services .options-list .section-title .icon-plus {
        display: inline-block;
        border: 1px solid #a5a5a5;
        border-radius: 4px;
        font-size: 12px;
        padding: 4px;
        cursor: pointer;
        margin-left: 10px;
        transition: all 0.2s;
        user-select: none;
    }

    .products-and-services .options-list .section-title .icon-plus:hover {
        border: 1px solid #a80181;
        background: #a80181;
        color: #fff;
    }
</style>