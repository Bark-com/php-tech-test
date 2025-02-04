# E-commerce service

## Scenario
An electronics company has an existing project, which already has users.

They require e-commerce functionality to be added to the project, extending it to allow for purchases of goods/services.

The company has decided to use a third party e-commerce provider to handle this functionality:

[Fake Store API](https://fakestoreapi.com/)

This third party provides the ability to do the following:
* Create a new “store” user
* Create products to new store user’s cart
* List products in new store user’s cart

## Task
Upgrade the project by creating a client to the third party e-commerce provider. The client should have:
* Ability to **create** a new store user
* Ability to **add** an existing product (from the third party e-commerce provider) 
* Ability to **list** products in the store user’s cart

Notes:
* It is not required within this task to create e-commerce endpoints for the existing project itself, only a service to consume the third party e-commerce endpoints.
* Do not handle the checkout process for the new store user’s cart.

It is encouraged to use test driven development to achieve this.

